<?php

namespace App\Repository;

use App\Entity\ConfigGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ConfigGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConfigGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConfigGroup[]    findAll()
 * @method ConfigGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConfigGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConfigGroup::class);
    }

    // /**
    //  * @return ConfigGroup[] Returns an array of ConfigGroup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConfigGroup
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
