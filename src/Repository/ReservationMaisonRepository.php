<?php

namespace App\Repository;

use App\Entity\ReservationMaison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationMaison|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationMaison|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationMaison[]    findAll()
 * @method ReservationMaison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationMaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationMaison::class);
    }
    public function OrderByDatedebut()
    {
        return $this->createQueryBuilder('g')
            ->orderBy('g.dateDebut ')
            ->getQuery()
            ->getResult()
            ;
    }

    public function OrderByDatefin()
    {
        return $this->createQueryBuilder('g')
            ->orderBy('g.dateFin ')
            ->getQuery()
            ->getResult()
            ;
    }
    // /**
    //  * @return ReservationMaison[] Returns an array of ReservationMaison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationMaison
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
