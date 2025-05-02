<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Blessure;



 class StatistiqueController extends AbstractController
{
    #[Route('/statistiques', name: 'app_statistiques')]
    public function index(EntityManagerInterface $entityManager): Response
    
{
    $connection = $entityManager->getConnection();
    $sql = "
        SELECT 
            YEAR(date_blessure) as year, 
            MONTH(date_blessure) as month, 
            COUNT(id) as count
        FROM blessure
        GROUP BY YEAR(date_blessure), MONTH(date_blessure)
        ORDER BY YEAR(date_blessure), MONTH(date_blessure) ASC
    ";
    $statement = $connection->prepare($sql);
    $results = $statement->executeQuery()->fetchAllAssociative();

    // Transformer les données pour Chart.js
    $labels = [];
    $data = [];
    foreach ($results as $row) {
        $labels[] = sprintf('%04d-%02d', $row['year'], $row['month']); // Format : YYYY-MM
        $data[] = $row['count'];
    }

    return $this->render('statistique/index.html.twig', [
        'labels' => $labels,
        'data' => $data,
    ]);
}
}