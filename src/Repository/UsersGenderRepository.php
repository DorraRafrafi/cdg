<?php

namespace App\Repository;

use App\Entity\UsersGender;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UsersGender|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersGender|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersGender[]    findAll()
 * @method UsersGender[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersGenderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsersGender::class);
    }

    // /**
    //  * @return UsersGender[] Returns an array of UsersGender objects
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
    public function findOneBySomeField($value): ?UsersGender
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
