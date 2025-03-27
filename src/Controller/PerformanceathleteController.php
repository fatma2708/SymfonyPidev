<?php

namespace App\Controller;

use App\Entity\Performanceathlete;
use App\Form\PerformanceathleteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/performanceathlete')]
final class PerformanceathleteController extends AbstractController
{
    #[Route(name: 'app_performanceathlete_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $performanceathletes = $entityManager
            ->getRepository(Performanceathlete::class)
            ->findAll();

        return $this->render('performanceathlete/index.html.twig', [
            'performanceathletes' => $performanceathletes,
        ]);
    }

    #[Route('/new', name: 'app_performanceathlete_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $performanceathlete = new Performanceathlete();
        $form = $this->createForm(PerformanceathleteType::class, $performanceathlete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($performanceathlete);
            $entityManager->flush();

            return $this->redirectToRoute('app_performanceathlete_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('performanceathlete/new.html.twig', [
            'performanceathlete' => $performanceathlete,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_performanceathlete_show', methods: ['GET'])]
    public function show(Performanceathlete $performanceathlete): Response
    {
        return $this->render('performanceathlete/show.html.twig', [
            'performanceathlete' => $performanceathlete,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_performanceathlete_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Performanceathlete $performanceathlete, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PerformanceathleteType::class, $performanceathlete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_performanceathlete_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('performanceathlete/edit.html.twig', [
            'performanceathlete' => $performanceathlete,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_performanceathlete_delete', methods: ['POST'])]
    public function delete(Request $request, Performanceathlete $performanceathlete, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$performanceathlete->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($performanceathlete);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_performanceathlete_index', [], Response::HTTP_SEE_OTHER);
    }
}
