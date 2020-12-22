<?php

namespace App\Controller\Admin;

use App\Entity\Movie;
use App\Form\MovieType;
use App\Repository\MovieRepository;
use App\Service\ImageUploader;
use App\Service\Slugger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/movie", name="admin_movie_")
 */
class MovieController extends AbstractController
{
    /**
     * @Route("", name="list")
     */
    public function list(MovieRepository $movieRepository): Response
    {
        return $this->render('admin/movie/list.html.twig', [
            'movies' => $movieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(ImageUploader $imageUploader, Request $request, Slugger $slugger): Response
    {
        // On crée un objet de la classe Movie vide
        $movie = new Movie();

        // On crée un objet Form en lui précisant
        //     - de se baser sur la définition d'un formulaire donnée dans MovieType
        //     - de s'associer à l'objet $movie
        $form = $this->createForm(MovieType::class, $movie);

        // handleRequest() sert à associer la requête au formulaire
        // Cette méthode va prendre les informations reçues en POST et les associer aux champs de $form
        // Ce qui va permettre de pré-remplir les champs
        // Par la même occasion, cette méthode va modifier $movie et lui attribuer toutes les valeurs reçues dans $request
        $form->handleRequest($request);

        // Pour ajouter $movie en BDD, il faut absolument que notre formulaire soit valide et envoyé
        // On utilise donc isSubmitted() pour vérifier que le formulaire a été envoyé
        //    Ça veut dire qu'on reçu des données en POST qui ont permis de remplir $form et movie
        // On utilise isValid() pour vérifier que le formulaire est valide.
        //    Principalement, ça veut dire qu'on vérifie que le token anti-CSRF est valide
        //    Sur un autre aspect, ça permet aussi de valider des contraintes déclarés dans le formulaire
        //    Cette notion avancée est abordée ici : https://symfony.com/doc/current/validation.html#constraints-in-form-classes
        if ($form->isSubmitted() && $form->isValid()) {
            // Journée 10, si le formulaire est valide, on calcule le slug du movie
            // et on le place dans la propriété $slug du movie
            // $movie->setSlug($slugger->slugify($movie->getTitle()));
            $slugger->movieCreateSlug($movie);

            // Symfony Jour 08 :
            // On précise qu'il faut être ROLE_ADMIN pour avoir le droit d'ajouter un film
            // Un ROLE_USER a donc accès au formulaire mais ne peut pas créer de nouveau film
            // On utilise denyAccessUnlessGranted() avec un rôle pour tester le rôle du user connecté
            // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Pour ajouter un film, il faut être Administrateur');
            $this->denyAccessUnlessGranted('ADD', $movie);
            
            // On récupère l'entity manager
            $em = $this->getDoctrine()->getManager();
            
            // On persiste $movie pour annoncer à l'entity manager qu'on souhaite stocker cet objet en BDD
            $em->persist($movie);
            
            // On flushe les modifications
            $em->flush();

            // On utilise le service ImageUploader
            // $filename = $movie->getId() . '.jpg';
            // $imageUploader->moveImage($form->get('poster')->getData(), 'posters', $filename);
            // On simplifie les deux lignes en créant une autre méthode plus facile à lire
            $imageUploader->movePoster($form, $movie);

            // On redirige sur la liste des films
            return $this->redirectToRoute('admin_movie_list');
        }
        
        return $this->render('admin/movie/add.html.twig', [
            // createView() permet de créer un objet de la classe FormView car Twig ne sait que faire d'un objet Form
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(ImageUploader $imageUploader, Movie $movie, Request $request, Slugger $slugger)
    {
        // Tout ocmme la route /add, on utilisera un objet $movie et un objet $form
        // La différence ici est que $movie n'est pas un objet neuf mais il a été récupéré depuis la BDD

        // On crée un objet $form à partir de MovieType et on l'associe à notre objet $movie
        $form = $this->createForm(MovieType::class, $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On définit le slug de $movie et on le place dans sa proprité $slug
            $slugger->movieCreateSlug($movie);

            // On modifie la propriété updatedAt de $movie
            // $movie->setUpdatedAt(new \DateTime());

            // On flushe, sans persister, parce que l'objet est déjà persisté
            // persist = déclarer qu'un objet est à «ajouter» en BDD
            $this->getDoctrine()->getManager()->flush();

            $imageUploader->movePoster($form, $movie);

            // On redirige sur la liste des films
            return $this->redirectToRoute('admin_movie_list');
        }

        return $this->render('admin/movie/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete", methods={"DELETE"})
     */
    public function delete(Movie $movie)
    {
        // Pour supprimer un objet on a besoin de l'entity manager
        $em = $this->getDoctrine()->getManager();
        // On indique au manager de supprimer l'objet $movie
        $em->remove($movie);
        // On demande au manager d'appliquer toutes les modifications
        $em->flush();

        // Si on voulait utilsier des messages flash dans nos templates, ça serait ici

        // On redirige vers la liste des films
        return $this->redirectToRoute('admin_movie_list');
    }
}
