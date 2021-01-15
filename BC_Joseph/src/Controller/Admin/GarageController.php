<?php

namespace App\Controller\Admin;

use App\Entity\Garage;
use App\Form\GarageType;
use App\Repository\GarageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/garage")
 */
class GarageController extends AbstractController
{
    /**
     * @Route("/", name="admin_garage_index", methods={"GET"})
     */
    public function index(GarageRepository $garageRepository): Response
    {
        return $this->render('admin/garage/index.html.twig', [
            'garages' => $garageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_garage_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $garage = new Garage();
        $form = $this->createForm(GarageType::class, $garage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($garage);
            $entityManager->flush();

            return $this->redirectToRoute('admin_garage_index');
        }

        return $this->render('admin/garage/new.html.twig', [
            'garage' => $garage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_garage_show", methods={"GET"})
     */
    public function show(Garage $garage): Response
    {
        return $this->render('admin/garage/show.html.twig', [
            'garage' => $garage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_garage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Garage $garage): Response
    {
        $form = $this->createForm(GarageType::class, $garage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin/garage_index');
        }

        return $this->render('admin/garage/edit.html.twig', [
            'garage' => $garage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_garage_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Garage $garage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$garage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($garage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_garage_index');
    }
}