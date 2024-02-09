<?php

namespace App\Repository;

use App\Entity\DangerousBreed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DangerousBreed>
 *
 * @method DangerousBreed|null find($id, $lockMode = null, $lockVersion = null)
 * @method DangerousBreed|null findOneBy(array $criteria, array $orderBy = null)
 * @method DangerousBreed[]    findAll()
 * @method DangerousBreed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DangerousBreedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DangerousBreed::class);
    }

//    /**
//     * @return DangerousBreed[] Returns an array of DangerousBreed objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DangerousBreed
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
