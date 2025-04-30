<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Performanceequipe;
use App\Form\PerformanceequipeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PerformanceequipeRepository;


#[Route('/performanceequipe')]
final class PerformanceequipeController extends AbstractController
{
    #[Route(name: 'app_performanceequipe_index', methods: ['GET'])]
public function index(
    PerformanceequipeRepository $repository,
    PaginatorInterface $paginator,
    Request $request
): Response {
    $query = $repository->createQueryBuilder('p')->getQuery();
    
    $performanceequipes = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        $request->query->getInt('per_page', 10) // Default to 10 items
    );

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
    // PerformanceequipeController.php
#[Route('/chart', name: 'app_performanceequipe_chart', methods: ['GET'])]
public function chart(PerformanceequipeRepository $repository): Response
{
    $rawData = $repository->getAllPerformanceData();
    
    // Process data for top 3 teams
    $teamScores = [];
    foreach ($rawData as $entry) {
        $team = $entry['equipeName'];
        if (!isset($teamScores[$team])) {
            $teamScores[$team] = 0;
        }
        $teamScores[$team] += $entry['performanceScore'];
    }
    arsort($teamScores);
    $topTeams = array_slice($teamScores, 0, 3, true);

    // Group data by tournament
    $tournoisData = [];
    foreach ($rawData as $entry) {
        $tournoiId = $entry['tournoiId'];
        if (!isset($tournoisData[$tournoiId])) {
            $tournoisData[$tournoiId] = [
                'name' => $entry['tournoiName'],
                'wins' => []
            ];
        }
        $tournoisData[$tournoiId]['wins'][] = [
            'equipe' => $entry['equipeName'],
            'wins' => $entry['totalWins']
        ];
    }

    return $this->render('performanceequipe/chart.html.twig', [
        'topTeams' => $topTeams,
        'tournoisData' => $tournoisData,
        'rawData' => $rawData
    ]);
}
#[Route('/search', name: 'app_performanceequipe_search', methods: ['GET'])]
public function search(Request $request, PerformanceequipeRepository $repository, PaginatorInterface $paginator): JsonResponse
{
    $searchTerm = $request->query->get('search', '');
    $queryBuilder = $repository->createQueryBuilder('p')
        ->join('p.equipe', 'e')
        ->join('p.tournois', 't')
        ->where('e.nom LIKE :searchTerm OR t.nom LIKE :searchTerm')
        ->setParameter('searchTerm', '%' . $searchTerm . '%');

    $pagination = $paginator->paginate(
        $queryBuilder,
        $request->query->getInt('page', 1),
        5 // Items per page
    );

    $data = [];
    foreach ($pagination as $performanceequipe) {
        $data[] = [
            'id' => $performanceequipe->getId(),
            'equipe' => $performanceequipe->getEquipe()->getNom(),
            'tournoi' => $performanceequipe->getTournois()->getNom(),
            'victoires' => $performanceequipe->getVictoires(),
            'pertes' => $performanceequipe->getPertes(),
            'rang' => $performanceequipe->getRang(),
        ];
    }

    return new JsonResponse([
        'data' => $data,
        'pagination' => [
            'currentPage' => $pagination->getCurrentPageNumber(),
            'totalPages' => $pagination->getPageCount(), // Correct method to get total pages

            
        ],
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
