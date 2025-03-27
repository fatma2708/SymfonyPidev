<?php

namespace App\Controller;

use App\Entity\Installationsportive;
use App\Form\InstallationsportiveType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/installationsportive')]
final class InstallationsportiveController extends AbstractController
{
    #[Route(name: 'app_installationsportive_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $installationsportives = $entityManager
            ->getRepository(Installationsportive::class)
            ->findAll();

        return $this->render('installationsportive/index.html.twig', [
            'installationsportives' => $installationsportives,
        ]);
    }

    #[Route('/new', name: 'app_installationsportive_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $installationsportive = new Installationsportive();
        $form = $this->createForm(InstallationsportiveType::class, $installationsportive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($installationsportive);
            $entityManager->flush();

            return $this->redirectToRoute('app_installationsportive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('installationsportive/new.html.twig', [
            'installationsportive' => $installationsportive,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installationsportive_show', methods: ['GET'])]
    public function show(Installationsportive $installationsportive): Response
    {
        return $this->render('installationsportive/show.html.twig', [
            'installationsportive' => $installationsportive,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_installationsportive_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Installationsportive $installationsportive, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InstallationsportiveType::class, $installationsportive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_installationsportive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('installationsportive/edit.html.twig', [
            'installationsportive' => $installationsportive,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installationsportive_delete', methods: ['POST'])]
    public function delete(Request $request, Installationsportive $installationsportive, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$installationsportive->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($installationsportive);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_installationsportive_index', [], Response::HTTP_SEE_OTHER);
    }
}
