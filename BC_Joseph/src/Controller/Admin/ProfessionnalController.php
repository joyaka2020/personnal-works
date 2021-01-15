<?php

namespace App\Controller\Admin;

use App\Entity\Professionnal;
use App\Form\ProfessionnalType;
use App\Repository\ProfessionnalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/professionnal")
 */
class ProfessionnalController extends AbstractController
{
    /**
     * @Route("/", name="admin_professionnal_index", methods={"GET"})
     */
    public function index(ProfessionnalRepository $professionnalRepository): Response
    {
        return $this->render('admin/professionnal/index.html.twig', [
            'professionnals' => $professionnalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_professionnal_new", methods={"GET","POST"})
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

            return $this->redirectToRoute('admin_professionnal_index');
        }

        return $this->render('admin/professionnal/new.html.twig', [
            'professionnal' => $professionnal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_professionnal_show", methods={"GET"})
     */
    public function show(Professionnal $professionnal): Response
    {
        return $this->render('admin/professionnal/show.html.twig', [
            'professionnal' => $professionnal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_professionnal_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Professionnal $professionnal): Response
    {
        $form = $this->createForm(ProfessionnalType::class, $professionnal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin/professionnal_index');
        }

        return $this->render('admin/professionnal/edit.html.twig', [
            'professionnal' => $professionnal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_professionnal_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Professionnal $professionnal): Response
    {
        if ($this->isCsrfTokenValid('delete'.$professionnal->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($professionnal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_professionnal_index');
    }
}