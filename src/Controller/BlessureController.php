<?php

namespace App\Controller;

use App\Entity\Blessure;
use App\Form\BlessureType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/blessure')]
final class BlessureController extends AbstractController
{
    #[Route(name: 'app_blessure_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $blessures = $entityManager
            ->getRepository(Blessure::class)
            ->findAll();

        return $this->render('blessure/index.html.twig', [
            'blessures' => $blessures,
        ]);
    }

    #[Route('/new', name: 'app_blessure_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $blessure = new Blessure();
        $form = $this->createForm(BlessureType::class, $blessure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($blessure);
            $entityManager->flush();

            return $this->redirectToRoute('app_blessure_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blessure/new.html.twig', [
            'blessure' => $blessure,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_blessure_show', methods: ['GET'])]
    public function show(Blessure $blessure): Response
    {
        return $this->render('blessure/show.html.twig', [
            'blessure' => $blessure,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_blessure_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Blessure $blessure, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BlessureType::class, $blessure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_blessure_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blessure/edit.html.twig', [
            'blessure' => $blessure,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_blessure_delete', methods: ['POST'])]
    public function delete(Request $request, Blessure $blessure, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blessure->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($blessure);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_blessure_index', [], Response::HTTP_SEE_OTHER);
    }
}
