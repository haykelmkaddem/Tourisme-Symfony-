<?php

namespace App\Repository;

use App\Entity\CategorieEven;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategorieEven|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieEven|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieEven[]    findAll()
 * @method CategorieEven[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieEvenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieEven::class);
    }

    // /**
    //  * @return CategorieEven[] Returns an array of CategorieEven objects
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
    public function findOneBySomeField($value): ?CategorieEven
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
