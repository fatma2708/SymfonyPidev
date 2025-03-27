<?php

namespace App\Controller;

use App\Entity\Matchsportif;
use App\Form\MatchsportifType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/matchsportif')]
final class MatchsportifController extends AbstractController
{
    #[Route(name: 'app_matchsportif_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $matchsportifs = $entityManager
            ->getRepository(Matchsportif::class)
            ->findAll();

        return $this->render('matchsportif/index.html.twig', [
            'matchsportifs' => $matchsportifs,
        ]);
    }

    #[Route('/new', name: 'app_matchsportif_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $matchsportif = new Matchsportif();
        $form = $this->createForm(MatchsportifType::class, $matchsportif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($matchsportif);
            $entityManager->flush();

            return $this->redirectToRoute('app_matchsportif_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matchsportif/new.html.twig', [
            'matchsportif' => $matchsportif,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matchsportif_show', methods: ['GET'])]
    public function show(Matchsportif $matchsportif): Response
    {
        return $this->render('matchsportif/show.html.twig', [
            'matchsportif' => $matchsportif,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_matchsportif_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Matchsportif $matchsportif, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatchsportifType::class, $matchsportif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_matchsportif_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matchsportif/edit.html.twig', [
            'matchsportif' => $matchsportif,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matchsportif_delete', methods: ['POST'])]
    public function delete(Request $request, Matchsportif $matchsportif, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matchsportif->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($matchsportif);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_matchsportif_index', [], Response::HTTP_SEE_OTHER);
    }
}
