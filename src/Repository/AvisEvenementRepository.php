<?php

namespace App\Repository;

use App\Entity\AvisEvenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AvisEvenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvisEvenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvisEvenement[]    findAll()
 * @method AvisEvenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisEvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvisEvenement::class);
    }

    // /**
    //  * @return AvisEvenement[] Returns an array of AvisEvenement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AvisEvenement
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
