<?php

namespace App\Repository;

use App\Entity\Performanceequipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PerformanceequipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Performanceequipe::class);
    
    }
    // PerformanceequipeRepository.php
public function getAllPerformanceData(): array
{
    return $this->createQueryBuilder('p')
        ->select([
            'e.nom as equipeName',
            't.id as tournoiId',
            't.nom as tournoiName',
            'SUM(p.victoires) as totalWins',
            'SUM(p.pertes) as totalLosses',
            'AVG(p.rang) as avgRank',
            '(AVG(p.victoires) * 0.5) + (AVG(p.rang) * 0.3) - (SUM(p.pertes) * 0.2) as performanceScore'
        ])
        ->join('p.equipe', 'e')
        ->join('p.tournois', 't')
        ->groupBy('e.id, t.id')
        ->getQuery()
        ->getResult();
}
    // Add custom methods as needed
}