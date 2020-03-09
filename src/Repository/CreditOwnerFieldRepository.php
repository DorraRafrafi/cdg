<?php

namespace App\Repository;

use App\Entity\CreditOwnerField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CreditOwnerField|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreditOwnerField|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreditOwnerField[]    findAll()
 * @method CreditOwnerField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreditOwnerFieldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreditOwnerField::class);
    }

    // /**
    //  * @return CreditOwnerField[] Returns an array of CreditOwnerField objects
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
    public function findOneBySomeField($value): ?CreditOwnerField
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
