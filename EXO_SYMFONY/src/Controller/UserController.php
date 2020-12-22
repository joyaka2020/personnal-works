<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/profile", name="user")
     */
    public function index(): Response
    {
        // Récupère l'utilisateur connecté
        $user = $this->getUser();

        // Ce test n'est là que pour le cours
        // En fait on demande toujorus à security.yaml de vérifier que
        // l'utilisateur est connecté et qu'il a les droits pour venir
        // dans le contrôleur
        // if ($user === null) {
        //     return $this->redirectToRoute('app_login');
        // }
        

        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
    }
}
