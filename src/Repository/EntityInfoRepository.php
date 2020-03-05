<?php

namespace App\Repository;

use App\Entity\EntityInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EntityInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntityInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntityInfo[]    findAll()
 * @method EntityInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntityInfo::class);
    }

    // /**
    //  * @return EntityInfo[] Returns an array of EntityInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EntityInfo
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
