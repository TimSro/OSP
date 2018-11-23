<?php

namespace App\Repository;

use App\Entity\Klasse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Klasse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Klasse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Klasse[]    findAll()
 * @method Klasse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KlasseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Klasse::class);
    }

    // /**
    //  * @return Klasse[] Returns an array of Klasse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Klasse
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
