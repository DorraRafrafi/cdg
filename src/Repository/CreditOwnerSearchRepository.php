<?php

namespace App\Repository;

use App\Entity\CreditOwnerSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CreditOwnerSearch|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreditOwnerSearch|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreditOwnerSearch[]    findAll()
 * @method CreditOwnerSearch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreditOwnerSearchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreditOwnerSearch::class);
    }

    // /**
    //  * @return CreditOwnerSearch[] Returns an array of CreditOwnerSearch objects
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
    public function findOneBySomeField($value): ?CreditOwnerSearch
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
