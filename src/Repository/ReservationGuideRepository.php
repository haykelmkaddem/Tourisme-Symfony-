<?php

namespace App\Repository;

use App\Entity\ReservationGuide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationGuide|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationGuide|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationGuide[]    findAll()
 * @method ReservationGuide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationGuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationGuide::class);
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
    //  * @return ReservationGuide[] Returns an array of ReservationGuide objects
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
    public function findOneBySomeField($value): ?ReservationGuide
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
