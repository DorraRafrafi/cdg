<?php

namespace App\Repository;

use App\Entity\TgrAgency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TgrAgency|null find($id, $lockMode = null, $lockVersion = null)
 * @method TgrAgency|null findOneBy(array $criteria, array $orderBy = null)
 * @method TgrAgency[]    findAll()
 * @method TgrAgency[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TgrAgencyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TgrAgency::class);
    }

    // /**
    //  * @return TgrAgency[] Returns an array of TgrAgency objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TgrAgency
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
