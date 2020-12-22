<?php

namespace App\Controller\Api\V1;

use App\Entity\Movie;
use App\Form\MovieType;
use App\Repository\MovieRepository;
use App\Service\Slugger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1/movies", name="api_v1_movie_")
 */
class MovieController extends AbstractController
{
    /**
     * @Route("", name="index", methods={"GET"})
     */
    public function index(MovieRepository $movieRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $movies = $movieRepository->findAll();

        return $this->json($movies, 200, [], ['groups' => 'movie']);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Movie $movie)
    {
        return $this->json($movie, 200, [], [
            'groups' => [
                'movie',
                'movie_extended'
            ]
            ]);
    }

    /**
     * @Route("", name="add", methods={"POST"})
     */
    public function add(Request $request, Slugger $slugger)
    {
        // On récupère le JSON dans $request et on en retire un tableau associatif
        $json = json_decode($request->getContent(), true);

        // On crée objet Movie
        $movie = new Movie();
        // On crée un formulaire MovieType associé à l'objet Movie
        $form = $this->createForm(MovieType::class, $movie, ['csrf_protection' => false]);

        // On associe le JSON reçu au formulaire
        $form->submit($json);

        // Si le formulaire est valide, on persiste en BDD
        if ($form->isValid()) {
            $slugger->movieCreateSlug($movie);
            // On fait une réponse 201
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();

            return $this->json($movie, 201, [], [
                'groups' => ['movie', 'movie_extended']
            ]);
        }

        // On fait une réponse 400
        return $this->json([
            'code' => 400,
            'message' => (string) $form->getErrors(true, true),
        ], 400);
    }

    /**
     * @Route("/{id}", name="edit", methods={"PUT", "PATCH"})
     */
    public function edit(Movie $movie, Request $request, Slugger $slugger)
    {
        $json = json_decode($request->getContent(), true);
        $form = $this->createForm(MovieType::class, $movie, ['csrf_protection' => false]);
        $form->submit($json);

        if ($form->isValid()) {
            $slugger->movieCreateSlug($movie);
            
            $this->getDoctrine()->getManager()->flush();

            return $this->json($movie, 200, [], [
                'groups' => ['movie', 'movie_extended']
            ]);
        }

        return $this->json([
            'code' => 400,
            'message' => (string) $form->getErrors(true, true),
        ], 400);
    }

    /**
     * @Route("/{id}", name="delete", methods={"DELETE"})
     */
    public function delete(Movie $movie)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($movie);
        $em->flush();

        return $this->json(null, 204);
    }
}
