<?php

namespace App\Repository;

use App\Entity\AssMat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AssMat|null find($id, $lockMode = null, $lockVersion = null)
 * @method AssMat|null findOneBy(array $criteria, array $orderBy = null)
 * @method AssMat[]    findAll()
 * @method AssMat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssMatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AssMat::class);
    }

    // /**
    //  * @return AssMat[] Returns an array of AssMat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AssMat
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
