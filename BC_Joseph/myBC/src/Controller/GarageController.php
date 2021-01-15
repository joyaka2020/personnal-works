<?php

namespace App\Controller;

use App\Entity\Garage;
use App\Form\GarageType;
use App\Repository\GarageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/garage")
 */
class GarageController extends AbstractController
{
    /**
     * @Route("/", name="garage_index", methods={"GET"})
     */
    public function index(GarageRepository $garageRepository): Response
    {
        return $this->render('garage/index.html.twig', [
            'garages' => $garageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="garage_new", methods={"GET","POST"})
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

            return $this->redirectToRoute('garage_index');
        }

        return $this->render('garage/new.html.twig', [
            'garage' => $garage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="garage_show", methods={"GET"})
     */
    public function show(Garage $garage): Response
    {
        return $this->render('garage/show.html.twig', [
            'garage' => $garage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="garage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Garage $garage): Response
    {
        $form = $this->createForm(GarageType::class, $garage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('garage_index');
        }

        return $this->render('garage/edit.html.twig', [
            'garage' => $garage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="garage_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Garage $garage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$garage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($garage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('garage_index');
    }
}