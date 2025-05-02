<?php

namespace App\Controller;

use App\Repository\AthleteRepository;
use App\Entity\Blessure;
use App\Form\BlessureType;
use App\Repository\BlessureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
#[Route('/blessure')]
final class BlessureController extends AbstractController{
    #[Route(name: 'app_blessure_index', methods: ['GET'])]
    public function index(BlessureRepository $blessureRepository): Response
    {
        return $this->render('blessure/index.html.twig', [
            'blessures' => $blessureRepository->findAll(),
        ]);
    }
    #[Route('/front',name: 'app_blessure_index_front', methods: ['GET'])]
    public function indexFront(BlessureRepository $blessureRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $blessureRepository->createQueryBuilder('e')->getQuery();
    
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // page actuelle
            6 // nombre d'éléments par page
        );
    
        return $this->render('FrontOffice/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

  /*  #[Route('/new', name: 'app_blessure_new', methods: ['GET', 'POST'])]
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
            'bl' => $blessure,
            'form' => $form,
        ]);
    }
*/
#[Route('/blessure/new', name: 'app_blessure_new', methods: ['GET', 'POST'])]
public function createAndNotify(
    Request $request,
    EntityManagerInterface $entityManager,
    MailerInterface $mailer
): Response {
    $blessure = new Blessure();
    $form = $this->createForm(BlessureType::class, $blessure);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistrer la blessure
        $entityManager->persist($blessure);
        $entityManager->flush();

        // Envoyer l'e-mail de notification
        $email = (new Email())
            ->from('hello@demomailtrap.co')
            ->to('oussama.mouldi@esprit.tn') // à adapter dynamiquement si possible
            ->subject('🚨 Notification de blessure')
            ->html($this->renderView('emails/blessure_alerte.html.twig', [
                'blessure' => $blessure,
            ]));

        $mailer->send($email);

        // Rediriger après traitement
        return $this->redirectToRoute('app_blessure_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('blessure/new.html.twig', [
        'bl' => $blessure,
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
