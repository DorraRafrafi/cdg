<?php

namespace App\Repository;

use App\Entity\RequestAttachment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RequestAttachment|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestAttachment|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestAttachment[]    findAll()
 * @method RequestAttachment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestAttachmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestAttachment::class);
    }

    // /**
    //  * @return RequestAttachment[] Returns an array of RequestAttachment objects
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
    public function findOneBySomeField($value): ?RequestAttachment
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
