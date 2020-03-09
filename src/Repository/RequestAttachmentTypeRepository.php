<?php

namespace App\Repository;

use App\Entity\RequestAttachmentType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RequestAttachmentType|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestAttachmentType|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestAttachmentType[]    findAll()
 * @method RequestAttachmentType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestAttachmentTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestAttachmentType::class);
    }

    // /**
    //  * @return RequestAttachmentType[] Returns an array of RequestAttachmentType objects
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
    public function findOneBySomeField($value): ?RequestAttachmentType
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
