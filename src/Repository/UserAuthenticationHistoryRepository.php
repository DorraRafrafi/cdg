<?php

namespace App\Repository;

use App\Entity\UserAuthenticationHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserAuthenticationHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserAuthenticationHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserAuthenticationHistory[]    findAll()
 * @method UserAuthenticationHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserAuthenticationHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserAuthenticationHistory::class);
    }

    // /**
    //  * @return UserAuthenticationHistory[] Returns an array of UserAuthenticationHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserAuthenticationHistory
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
