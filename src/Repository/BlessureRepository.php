<?php

namespace App\Repository;

use App\Entity\Blessure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Blessure>
 */
class BlessureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blessure::class);
    }

    // Tu peux ajouter des méthodes personnalisées ici si besoin
}
