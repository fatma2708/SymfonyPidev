<?php

namespace App\Controller;

use App\Entity\Performanceequipe;
use App\Form\PerformanceequipeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/performanceequipe')]
final class PerformanceequipeController extends AbstractController
{
    #[Route(name: 'app_performanceequipe_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $performanceequipes = $entityManager
            ->getRepository(Performanceequipe::class)
            ->findAll();

        return $this->render('performanceequipe/index.html.twig', [
            'performanceequipes' => $performanceequipes,
        ]);
    }

    #[Route('/new', name: 'app_performanceequipe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $performanceequipe = new Performanceequipe();
        $form = $this->createForm(PerformanceequipeType::class, $performanceequipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($performanceequipe);
            $entityManager->flush();

            return $this->redirectToRoute('app_performanceequipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('performanceequipe/new.html.twig', [
            'performanceequipe' => $performanceequipe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_performanceequipe_show', methods: ['GET'])]
    public function show(Performanceequipe $performanceequipe): Response
    {
        return $this->render('performanceequipe/show.html.twig', [
            'performanceequipe' => $performanceequipe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_performanceequipe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Performanceequipe $performanceequipe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PerformanceequipeType::class, $performanceequipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_performanceequipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('performanceequipe/edit.html.twig', [
            'performanceequipe' => $performanceequipe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_performanceequipe_delete', methods: ['POST'])]
    public function delete(Request $request, Performanceequipe $performanceequipe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$performanceequipe->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($performanceequipe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_performanceequipe_index', [], Response::HTTP_SEE_OTHER);
    }
}
