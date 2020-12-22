<?php

namespace App\Controller\Api\V1;

use App\Entity\Genre;
use App\Form\GenreType;
use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1/genres", name="api_v1_genre_")
 */
class GenreController extends AbstractController
{
    /**
     * @Route("", name="index", methods={"GET"})
     */
    public function index(GenreRepository $genreRepository): Response
    {
        $genres = $genreRepository->findAll();

        return $this->json($genres, 200, [], [
            'groups' => 'genre'
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Genre $genre): Response
    {
        return $this->json($genre, 200, [], [
            'groups' => ['genre', 'genre_extended'],
        ]);
    }

    /**
     * @Route("", name="add", methods={"POST"})
     */
    public function add(Request $request)
    {
        // Une requête POST enverra un objet JSON
        // On récupère ce JSON avec getContent()
        $json = $request->getContent();
        // $json n'est que du texte, on veut en faire un tableau associatif
        // On demande à json_decode de retourner un array plutôt qu'un objet avec le deuxième argument
        $postedGenre = json_decode($json, true);

        // On crée objet Genre vide
        // On a l'intention de l'associer à un formulaire et de le persister
        $genre = new Genre();
        // On crée un form à partir de GenreType, comme  avec un formulaire HTML
        $form = $this->createForm(GenreType::class, $genre, ['csrf_protection' => false]);

        // On prend le tableau qui vient du json de la requête
        // et on l'associe au formulaire
        // Les noms des propriétés dans le JSON doivent être les même
        // que les noms des champs dans le formulaire
        // Ça remplit automatiquement $genre
        $form->submit($postedGenre);

        // Si les contraintes de validation sont respectées, on peut persist et flush $genre
        if ($form->isValid()) {   
            $em = $this->getDoctrine()->getManager();
            $em->persist($genre);
            $em->flush();
            
            // On retourne l'objet Genre créé en BDD avec une code 201 Created
            // On le sérialise de la manière qu'on veut
            return $this->json($genre, 201, [], [
                'groups' => ['genre', 'genre_extended'],
            ]);
        }
    
        // Si le $form n'est pas valide, on envoie une 400 Bad Request
        // Pour le moment, aujourd'hui, on envoie ce message en dur
        // Mais on verra qu'il est possible de récupérer les erreurs du formulaires pour les renvoyer en JSON
        return $this->json([
            'code' => 400,
            'message' => (string) $form->getErrors(true, true),
            ],
            400
        );
    }

    /**
     * @Route("/{id}", name="edit", methods={"PUT", "PATCH"})
     */
    public function edit(Genre $genre, Request $request)
    {
        $postedGenre = json_decode($request->getContent(), true);

        $form = $this->createForm(GenreType::class, $genre, ['csrf_protection' => false]);
        $form->submit($postedGenre);

        if ($form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->json($genre, 200, [], ['groups' => ['genre', 'genre_extended']]);
        }

        return $this->json([
            'code' => 400,
            'message' => 'Votre requête n\'est pas correcte.'
            ],
            400
        );
    }

    /**
     * @Route("/{id}", name="delete", methods={"DELETE"})
     */
    public function delete(Genre $genre)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($genre);
        $em->flush();

        return $this->json(null, 204);
    }
}
