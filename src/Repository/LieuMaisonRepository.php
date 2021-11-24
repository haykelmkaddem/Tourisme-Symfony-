<?php

namespace App\Repository;

use App\Entity\LieuMaison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LieuMaison|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuMaison|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuMaison[]    findAll()
 * @method LieuMaison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuMaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuMaison::class);
    }

    // /**
    //  * @return LieuMaison[] Returns an array of LieuMaison objects
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
    public function findOneBySomeField($value): ?LieuMaison
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
