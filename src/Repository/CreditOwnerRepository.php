<?php

namespace App\Repository;

use App\Entity\CreditOwner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CreditOwner|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreditOwner|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreditOwner[]    findAll()
 * @method CreditOwner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreditOwnerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreditOwner::class);
    }

    // /**
    //  * @return CreditOwner[] Returns an array of CreditOwner objects
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
    public function findOneBySomeField($value): ?CreditOwner
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
