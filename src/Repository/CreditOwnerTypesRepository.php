<?php

namespace App\Repository;

use App\Entity\CreditOwnerTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CreditOwnerTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreditOwnerTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreditOwnerTypes[]    findAll()
 * @method CreditOwnerTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreditOwnerTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreditOwnerTypes::class);
    }

    // /**
    //  * @return CreditOwnerTypes[] Returns an array of CreditOwnerTypes objects
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
    public function findOneBySomeField($value): ?CreditOwnerTypes
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
