<?php

namespace App\Repository;

use App\Entity\MonVestiaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MonVestiaire>
 *
 * @method MonVestiaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method MonVestiaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method MonVestiaire[]    findAll()
 * @method MonVestiaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonVestiaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MonVestiaire::class);
    }

//    /**
//     * @return MonVestiaire[] Returns an array of MonVestiaire objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MonVestiaire
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
