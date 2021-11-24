<?php

namespace App\Repository;

use App\Entity\AvisGuide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AvisGuide|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvisGuide|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvisGuide[]    findAll()
 * @method AvisGuide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisGuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvisGuide::class);
    }

    // /**
    //  * @return AvisGuide[] Returns an array of AvisGuide objects
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
    public function findOneBySomeField($value): ?AvisGuide
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
