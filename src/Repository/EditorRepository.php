<?php

namespace App\Repository;

use App\Entity\Editor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Editor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Editor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Editor[]    findAll()
 * @method Editor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EditorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Editor::class);
    }

//    /**
//     * @return Editor[] Returns an array of Editor objects
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
    public function findOneBySomeField($value): ?Editor
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
