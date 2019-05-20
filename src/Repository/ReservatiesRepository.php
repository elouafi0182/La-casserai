<?php

namespace App\Repository;

use App\Entity\Reservaties;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Reservaties|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservaties|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservaties[]    findAll()
 * @method Reservaties[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservatiesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reservaties::class);
    }

    // /**
    //  * @return Reservaties[] Returns an array of Reservaties objects
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
    public function findOneBySomeField($value): ?Reservaties
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
