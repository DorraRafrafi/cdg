<?php

namespace App\Repository;

use App\Entity\SmsVerification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SmsVerification|null find($id, $lockMode = null, $lockVersion = null)
 * @method SmsVerification|null findOneBy(array $criteria, array $orderBy = null)
 * @method SmsVerification[]    findAll()
 * @method SmsVerification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmsVerificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SmsVerification::class);
    }

    // /**
    //  * @return SmsVerification[] Returns an array of SmsVerification objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SmsVerification
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
