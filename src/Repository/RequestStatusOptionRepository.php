<?php

namespace App\Repository;

use App\Entity\RequestStatusOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RequestStatusOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestStatusOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestStatusOption[]    findAll()
 * @method RequestStatusOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestStatusOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestStatusOption::class);
    }

    // /**
    //  * @return RequestStatusOption[] Returns an array of RequestStatusOption objects
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
    public function findOneBySomeField($value): ?RequestStatusOption
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
