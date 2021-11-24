<?php

namespace App\Repository;

use App\Entity\AvisDestination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AvisDestination|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvisDestination|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvisDestination[]    findAll()
 * @method AvisDestination[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisDestinationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvisDestination::class);
    }

    // /**
    //  * @return AvisDestination[] Returns an array of AvisDestination objects
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
    public function findOneBySomeField($value): ?AvisDestination
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
