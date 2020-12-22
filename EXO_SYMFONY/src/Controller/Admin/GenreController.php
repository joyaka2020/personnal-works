<?php

namespace App\Controller\Admin;

use App\Entity\Genre;
use App\Form\GenreType;
use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/genre", name="admin_genre_")
 */
class GenreController extends AbstractController
{
    /**
     * @Route("", name="list")
     */
    public function list(GenreRepository $genreRepository): Response
    {
        return $this->render('admin/genre/list.html.twig', [
            'genres' => $genreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request)
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($genre);
            $em->flush();

            return $this->redirectToRoute('admin_genre_list');
        }

        return $this->render('admin/genre/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(Genre $genre, Request $request)
    {
        $form = $this->createForm(GenreType::class, $genre);

        // dump($form);
        $form->handleRequest($request);
        // dd($form);
        if ($form->isSubmitted() && $form->isValid()) {
            $genre->setUpdatedAt(new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_genre_list');
        }

        return $this->render('admin/genre/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete", methods={"DELETE"})
     */
    public function delete(Genre $genre)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($genre);
        $em->flush();

        return $this->redirectToRoute('admin_genre_list');
    }
}
