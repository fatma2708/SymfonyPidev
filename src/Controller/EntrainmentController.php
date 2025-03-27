<?php

namespace App\Controller;

use App\Entity\Entrainment;
use App\Form\EntrainmentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/entrainment')]
final class EntrainmentController extends AbstractController
{
    #[Route(name: 'app_entrainment_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $entrainments = $entityManager
            ->getRepository(Entrainment::class)
            ->findAll();

        return $this->render('entrainment/index.html.twig', [
            'entrainments' => $entrainments,
        ]);
    }

    #[Route('/new', name: 'app_entrainment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entrainment = new Entrainment();
        $form = $this->createForm(EntrainmentType::class, $entrainment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entrainment);
            $entityManager->flush();

            return $this->redirectToRoute('app_entrainment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entrainment/new.html.twig', [
            'entrainment' => $entrainment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entrainment_show', methods: ['GET'])]
    public function show(Entrainment $entrainment): Response
    {
        return $this->render('entrainment/show.html.twig', [
            'entrainment' => $entrainment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_entrainment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Entrainment $entrainment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EntrainmentType::class, $entrainment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_entrainment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entrainment/edit.html.twig', [
            'entrainment' => $entrainment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entrainment_delete', methods: ['POST'])]
    public function delete(Request $request, Entrainment $entrainment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entrainment->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($entrainment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_entrainment_index', [], Response::HTTP_SEE_OTHER);
    }
}
