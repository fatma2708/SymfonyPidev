<?php

namespace App\Repository;

use App\Entity\Tournois;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TournoisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tournois::class);
    }
  // src/Repository/TournoisRepository.php
public function findBetweenDates(\DateTimeInterface $start, \DateTimeInterface $end)
{
    return $this->createQueryBuilder('t')
        ->where('t.dateDebut <= :end')
        ->andWhere('t.dateFin >= :start')
        ->setParameter('start', $start->format('Y-m-d H:i:s'))
        ->setParameter('end', $end->format('Y-m-d H:i:s'))
        ->getQuery()
        ->getResult();
}

    // Add custom methods as needed
}