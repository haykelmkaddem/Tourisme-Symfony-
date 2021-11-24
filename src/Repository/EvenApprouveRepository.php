<?php

namespace App\Repository;

use App\Entity\EvenApprouve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EvenApprouve|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvenApprouve|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvenApprouve[]    findAll()
 * @method EvenApprouve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenApprouveRepository extends ServiceEntityRepository
{

    public function findEvenByTitre($name)
    {
        return $this->createQueryBuilder('even_approuve')
            ->where('even_approuve.titreEven LIKE :adresse')
            ->setParameter('adresse', '%'.$name.'%')
            ->getQuery()
            ->getResult();
    }

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvenApprouve::class);
    }

    // /**
    //  * @return EvenApprouve[] Returns an array of EvenApprouve objects
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
    public function findOneBySomeField($value): ?EvenApprouve
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
