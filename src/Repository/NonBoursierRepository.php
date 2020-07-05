<?php

namespace App\Repository;

use App\Entity\NonBoursier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NonBoursier|null find($id, $lockMode = null, $lockVersion = null)
 * @method NonBoursier|null findOneBy(array $criteria, array $orderBy = null)
 * @method NonBoursier[]    findAll()
 * @method NonBoursier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NonBoursierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NonBoursier::class);
    }

    // /**
    //  * @return NonBoursier[] Returns an array of NonBoursier objects
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
    public function findOneBySomeField($value): ?NonBoursier
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
