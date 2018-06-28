<?php

namespace App\Repository;

use App\Entity\EntertainmentType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EntertainmentType|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntertainmentType|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntertainmentType[]    findAll()
 * @method EntertainmentType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntertainmentTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EntertainmentType::class);
    }

    public function getAvailableEntertainments()
    {
        return $this->findAll();
    }

//    /**
//     * @return EntertainmentType[] Returns an array of EntertainmentType objects
//     */
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
    public function findOneBySomeField($value): ?EntertainmentType
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
