<?php

namespace App\Repository;

use App\Entity\PaymentField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PaymentField|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentField|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentField[]    findAll()
 * @method PaymentField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentFieldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentField::class);
    }

    // /**
    //  * @return PaymentField[] Returns an array of PaymentField objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PaymentField
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
