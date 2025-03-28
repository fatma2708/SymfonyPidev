<?php
namespace App\Controller;
use App\Repository\TournoisRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use DateTimeInterface;

use App\Entity\Tournois;
use App\Form\TournoisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/tournois')]
final class TournoisController extends AbstractController
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    #[Route(name: 'app_tournois_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $tournois = $entityManager->getRepository(Tournois::class)->findAll();

        return $this->render('tournois/index.html.twig', [
            'tournois' => $tournois,
        ]);
    }

    #[Route('/new', name: 'app_tournois_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tournoi = new Tournois();
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $this->validator->validate($tournoi);

            if (count($errors) > 0) {
                return $this->render('tournois/new.html.twig', [
                    'tournoi' => $tournoi,
                    'form' => $form,
                    'errors' => $errors,
                ]);
            }

            $entityManager->persist($tournoi);
            $entityManager->flush();

            return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournois/new.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form,
            'errors' => [],
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tournois_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $this->validator->validate($tournoi);

            if (count($errors) > 0) {
                return $this->render('tournois/edit.html.twig', [
                    'tournoi' => $tournoi,
                    'form' => $form,
                    'errors' => $errors,
                ]);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournois/edit.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form,
            'errors' => [],
        ]);
    }

    #[Route('/{id}/delete', name: 'app_tournois_delete', methods: ['POST'])]
    public function delete(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tournoi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tournoi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route(path: '/calendar', name: 'app_tournois_calendar')]
    public function calendar(): Response
    {
        return $this->render('tournois/calendar.html.twig');
    }
    #[Route('/calendar/events', name: 'fc_load_events', methods: ['GET'])]
public function loadCalendarEvents(
    Request $request,
    TournoisRepository $tournoisRepository
): JsonResponse {
    try {
        $start = new \DateTime($request->query->get('start'));
        $end = new \DateTime($request->query->get('end'));
    } catch (\Exception $e) {
        return new JsonResponse(['error' => 'Invalid date format'], 400);
    }

    $tournois = $tournoisRepository->findBetweenDates($start, $end);
    
    $events = [];
    foreach ($tournois as $tournoi) {
        $events[] = [
            'id' => $tournoi->getId(),
            'title' => $tournoi->getNom(),
            'start' => $tournoi->getDateDebut()->format(\DateTimeInterface::ATOM),
            'end' => $tournoi->getDateFin()->format(\DateTimeInterface::ATOM),
            'color' => '#ff0000'
        ];
    }

    return new JsonResponse($events);
}
    
}