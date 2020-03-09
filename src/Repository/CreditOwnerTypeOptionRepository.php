<?php

namespace App\Repository;

use App\Entity\CreditOwnerTypeOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CreditOwnerTypeOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreditOwnerTypeOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreditOwnerTypeOption[]    findAll()
 * @method CreditOwnerTypeOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreditOwnerTypeOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreditOwnerTypeOption::class);
    }

    // /**
    //  * @return CreditOwnerTypeOption[] Returns an array of CreditOwnerTypeOption objects
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
    public function findOneBySomeField($value): ?CreditOwnerTypeOption
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
