<?php

namespace App\Repository;

use App\Entity\Enpecie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Enpecie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enpecie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enpecie[]    findAll()
 * @method Enpecie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnpecieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enpecie::class);
    }

    // /**
    //  * @return Enpecie[] Returns an array of Enpecie objects
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
    public function findOneBySomeField($value): ?Enpecie
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
