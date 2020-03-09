<?php

namespace App\Repository;

use App\Entity\NotificationActor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NotificationActor|null find($id, $lockMode = null, $lockVersion = null)
 * @method NotificationActor|null findOneBy(array $criteria, array $orderBy = null)
 * @method NotificationActor[]    findAll()
 * @method NotificationActor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotificationActorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NotificationActor::class);
    }

    // /**
    //  * @return NotificationActor[] Returns an array of NotificationActor objects
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
    public function findOneBySomeField($value): ?NotificationActor
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
