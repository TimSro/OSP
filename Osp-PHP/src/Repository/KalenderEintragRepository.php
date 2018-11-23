<?php

namespace App\Repository;

use App\Entity\KalenderEintrag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KalenderEintrag|null find($id, $lockMode = null, $lockVersion = null)
 * @method KalenderEintrag|null findOneBy(array $criteria, array $orderBy = null)
 * @method KalenderEintrag[]    findAll()
 * @method KalenderEintrag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KalenderEintragRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KalenderEintrag::class);
    }

    // /**
    //  * @return KalenderEintrag[] Returns an array of KalenderEintrag objects
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
    public function findOneBySomeField($value): ?KalenderEintrag
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
