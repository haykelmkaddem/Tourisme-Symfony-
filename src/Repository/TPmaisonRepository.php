<?php

namespace App\Repository;

use App\Entity\TPmaison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TPmaison|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPmaison|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPmaison[]    findAll()
 * @method TPmaison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPmaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPmaison::class);
    }

    // /**
    //  * @return TPmaison[] Returns an array of TPmaison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TPmaison
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
