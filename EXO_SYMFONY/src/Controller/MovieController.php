<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use App\Service\Slugger;
// use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    /**
     * On peut faire des injections de dépendances dans les contrôleurs
     * Ici on injecte l'entity manager de Doctrine.
     * La seule raison qui pourrait nous pousser à le faire c'est qu'on se servirait
     * très souvent de $em dans toutes nos routes.
     * 
     * Depuis Symfony 4 et 5, les injections de dépendances ne sont plus nécessaires
     * dans les contrôleurs parce que l'autowiring (dans les paramètres) permet un
     * code beaucoup plus lisible
     */
    // private $em;

    // public function __construct(EntityManagerInterface $em)
    // {
    //     $this->em = $em;
    // }

    /**
     * Affiche les 10 dernier films en page d'accueil
     * 
     * @Route("/", name="movie_list")
     */
    public function list(MovieRepository $movieRepository, Request $request): Response
    {
        // Si aucune page n'est déterminée dans l'URL, on est par défaut sur la page 1
        // Le second paramètre permet de préciser la valeur par défaut si «page» n'existe pas
        $page = $request->query->get('page', 1);
        $resultPerPages = 20;

        return $this->render('movie/list.html.twig', [
            // 'movies' => $movieRepository->findBy(['title' => 'Jurassic Park'], ['createdAt'=> 'DESC'], 10),
            'lastTenMovies' => $movieRepository->findLastTen(),
            'allMovies' => $movieRepository->findBy(
                [],
                ['title' => 'ASC'],
                $resultPerPages, // $limit c'est le nombre maximum d'élements qu'on veut obtenir
                ($page-1) * $resultPerPages // $offset c'est à partir de quel n-ième résultat on veut en obtenir $limit
                ),
            'page' => $page,
            'totalPages' => ceil($movieRepository->findTotalMovies() / $resultPerPages),
            ]);
            // ceil() permet d'arrondir au dessus (ceiling/plafond) : ceil(4,2) => 5
    }

    /**
     * Affiche les informations d'un film selon son id
     * 
     * @Route("/movie/{id}", name="movie_show", requirements={"id": "\d+"})
     */
    // public function show(int $id, MovieRepository $movieRepository): Response
    public function show(Movie $movie, Slugger $slugger): Response
    {
        // On va chercher le movie en fonction de son id
        // $movie = $movieRepository->findWithRelations($id);

        // On vérifie si $movie vaut null
        // Si c'est le cas, on envoie une 404 et on arrête l'exécution de la méthode
        // if ($movie === null) {
        //     throw $this->createNotFoundException('Le film demandé n\'existe pas');
        // }

        // return $this->render('movie/show.html.twig', [
        //     'movie' => $movie,
        //     ]);

        // Maintenant qu'on identifie les films en URL avec un slug
        // on a besoin de s'assurer que le slug existe dans l'objet
        // S'il n'existe pas, on le crée !
        if ($movie->getSlug() == null) {
            // $movie->setSlug($slugger->slugify($movie->getTitle()));
            $slugger->movieCreateSlug($movie);
            $this->getDoctrine()->getManager()->flush();
        }

        // On redirige vers la route avec le slug
        return $this->redirectToRoute('movie_show_slug', [
            'slug' => $movie->getSlug(),
            ],
            301
            );
        // On précise que cette redirection est permanente.
        // Ainsi le navigateur ou le crawler d'un moteur de recherche enregistre
        // l'information et évitent de refaire une requête sur la route avec l'id
        // pour utiliser directement la route avec le slug
    }

    /**
     * @Route("/movie/{slug}", name="movie_show_slug")
     */
    public function showFromSlug(Movie $movie)
    {
        return $this->render('movie/show.html.twig', [
            'movie' => $movie,
            ]);
    }
}
