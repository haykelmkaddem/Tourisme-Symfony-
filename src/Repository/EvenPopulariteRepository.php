<?php

namespace App\Repository;

use App\Entity\EvenPopularite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EvenPopularite|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvenPopularite|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvenPopularite[]    findAll()
 * @method EvenPopularite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenPopulariteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvenPopularite::class);
    }

    // /**
    //  * @return EvenPopularite[] Returns an array of EvenPopularite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EvenPopularite
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
