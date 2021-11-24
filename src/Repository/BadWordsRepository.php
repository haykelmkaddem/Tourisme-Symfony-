<?php

namespace App\Repository;

use App\Entity\BadWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BadWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method BadWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method BadWords[]    findAll()
 * @method BadWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BadWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BadWords::class);
    }

    // /**
    //  * @return BadWords[] Returns an array of BadWords objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BadWords
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
