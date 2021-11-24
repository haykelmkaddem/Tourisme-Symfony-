<?php

namespace App\Repository;

use App\Entity\EvenNonApprouve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EvenNonApprouve|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvenNonApprouve|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvenNonApprouve[]    findAll()
 * @method EvenNonApprouve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenNonApprouveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvenNonApprouve::class);
    }

    // /**
    //  * @return EvenNonApprouve[] Returns an array of EvenNonApprouve objects
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
    public function findOneBySomeField($value): ?EvenNonApprouve
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
