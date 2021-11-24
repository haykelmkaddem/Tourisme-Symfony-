<?php

namespace App\Repository;

use App\Entity\ContacterNous;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContacterNous|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContacterNous|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContacterNous[]    findAll()
 * @method ContacterNous[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContacterNousRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContacterNous::class);
    }

    // /**
    //  * @return ContacterNous[] Returns an array of ContacterNous objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContacterNous
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
