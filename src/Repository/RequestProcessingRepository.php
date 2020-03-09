<?php

namespace App\Repository;

use App\Entity\RequestProcessing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RequestProcessing|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestProcessing|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestProcessing[]    findAll()
 * @method RequestProcessing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestProcessingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestProcessing::class);
    }

    // /**
    //  * @return RequestProcessing[] Returns an array of RequestProcessing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RequestProcessing
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
