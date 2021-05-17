<?php

namespace App\Repository;

use App\Entity\ImageActu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImageActu|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageActu|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageActu[]    findAll()
 * @method ImageActu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageActuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageActu::class);
    }

    // /**
    //  * @return ImageActu[] Returns an array of ImageActu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageActu
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
