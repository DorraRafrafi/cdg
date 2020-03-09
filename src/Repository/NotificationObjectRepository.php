<?php

namespace App\Repository;

use App\Entity\NotificationObject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NotificationObject|null find($id, $lockMode = null, $lockVersion = null)
 * @method NotificationObject|null findOneBy(array $criteria, array $orderBy = null)
 * @method NotificationObject[]    findAll()
 * @method NotificationObject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotificationObjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NotificationObject::class);
    }

    // /**
    //  * @return NotificationObject[] Returns an array of NotificationObject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NotificationObject
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
