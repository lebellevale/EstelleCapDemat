<?php

namespace App\Repository;

use App\Entity\ListeAssmat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListeAssmat|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeAssmat|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeAssmat[]    findAll()
 * @method ListeAssmat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeAssmatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeAssmat::class);
    }

    // /**
    //  * @return ListeAssmat[] Returns an array of ListeAssmat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListeAssmat
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
