<?php

namespace App\Repository;

use App\Entity\Infopersonel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Infopersonel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Infopersonel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Infopersonel[]    findAll()
 * @method Infopersonel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfopersonelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Infopersonel::class);
    }

    // /**
    //  * @return Infopersonel[] Returns an array of Infopersonel objects
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
    public function findOneBySomeField($value): ?Infopersonel
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
