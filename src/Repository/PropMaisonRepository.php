<?php

namespace App\Repository;

use App\Entity\PropMaison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PropMaison|null find($id, $lockMode = null, $lockVersion = null)
 * @method PropMaison|null findOneBy(array $criteria, array $orderBy = null)
 * @method PropMaison[]    findAll()
 * @method PropMaison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropMaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PropMaison::class);
    }

    // /**
    //  * @return PropMaison[] Returns an array of PropMaison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PropMaison
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
