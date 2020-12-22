<?php

namespace App\Controller\Api\V1;

use App\Entity\Job;
use App\Form\JobType;
use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1/jobs", name="api_v1_job_")
 */
class JobController extends AbstractController
{
    /**
     * @Route("", name="index", methods={"GET"})
     */
    public function index(JobRepository $jobRepository): Response
    {
        $jobs = $jobRepository->findAll();

        return $this->json($jobs, 200, [], ['groups' => 'job']);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Job $job): Response
    {
        return $this->json($job, 200, [], ['groups' => ['job', 'job_extended']]);
    }

    /**
     * @Route("", name="add", methods={"POST"})
     */
    public function add(Request $request): Response
    {
        $jsonArray = json_decode($request->getContent() , true);

        $job = new Job();
        $form = $this->createForm(JobType::class, $job, ['csrf_protection' => false]);

        $form->submit($jsonArray);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->json($job, 201, [], ['groups' => ['job', 'job_extended']]);
        }
        return $this->json([
            'errors' => (string) $form->getErrors(true, true),
        ], 400);
    }

    /**
     * @Route("/{id}", name="edit", methods={"PUT", "PATCH"})
     */
    public function edit(Job $job, Request $request): Response
    {
        $jsonArray = json_decode($request->getContent() , true);

        $form = $this->createForm(JobType::class, $job, ['csrf_protection' => false]);

        $form->submit($jsonArray);

        if ($form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->json($job, 200, [], ['groups' => ['job', 'job_extended']]);
        }
        return $this->json([
            'errors' => (string) $form->getErrors(true, true),
        ], 400);
    }

    /**
     * @Route("/{id}", name="delete", methods={"DELETE"})
     */
    public function delete(Job $job): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($job);
        $em->flush();

        return $this->json(null, 204);
    }
}
