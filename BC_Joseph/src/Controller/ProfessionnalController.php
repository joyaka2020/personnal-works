<?php

namespace App\Controller;

use App\Entity\Professionnal;
use App\Form\ProfessionnalType;
use App\Repository\ProfessionnalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/professionnal")
 */
class ProfessionnalController extends AbstractController
{
    /**
     * @Route("/", name="professionnal_index", methods={"GET"})
     */
    public function index(ProfessionnalRepository $professionnalRepository): Response
    {
        return $this->render('professionnal/index.html.twig', [
            'professionnals' => $professionnalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="professionnal_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $professionnal = new Professionnal();
        $form = $this->createForm(ProfessionnalType::class, $professionnal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($professionnal);
            $entityManager->flush();

            return $this->redirectToRoute('professionnal_index');
        }

        return $this->render('professionnal/new.html.twig', [
            'professionnal' => $professionnal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="professionnal_show", methods={"GET"})
     */
    public function show(Professionnal $professionnal): Response
    {
        return $this->render('professionnal/show.html.twig', [
            'professionnal' => $professionnal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="professionnal_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Professionnal $professionnal): Response
    {
        $form = $this->createForm(ProfessionnalType::class, $professionnal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('professionnal_index');
        }

        return $this->render('professionnal/edit.html.twig', [
            'professionnal' => $professionnal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="professionnal_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Professionnal $professionnal): Response
    {
        if ($this->isCsrfTokenValid('delete'.$professionnal->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($professionnal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('professionnal_index');
    }
}
