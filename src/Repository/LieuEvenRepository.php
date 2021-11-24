<?php

namespace App\Repository;

use App\Entity\LieuEven;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LieuEven|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuEven|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuEven[]    findAll()
 * @method LieuEven[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuEvenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuEven::class);
    }

    // /**
    //  * @return LieuEven[] Returns an array of LieuEven objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LieuEven
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
