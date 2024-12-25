<?php

namespace App\Repository;

use App\Entity\Mouvement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Mouvement>
 *
 * @method Mouvement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mouvement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mouvement[]    findAll()
 * @method Mouvement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MouvementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mouvement::class);
    }

    public function findNav($navire)
    {
        $queryBuilder = $this->createQueryBuilder('m');

        $query = $queryBuilder
            ->select('m')
            ->leftJoin('m.matriculep', 'p')
            ->andWhere('m.archived = :archived')
            ->andWhere('p.navire = :navire')
            ->setParameter('archived', 0)
            ->setParameter('navire', $navire)
            ->getQuery();

        return $query->getResult();
    }

    public function findP($navire,$per)
    {
        $queryBuilder = $this->createQueryBuilder('m');

        $query = $queryBuilder
            ->select('m')
            ->leftJoin('m.matriculep', 'p')
            ->andWhere('m.archived = :archived')
            ->andWhere('p.navire = :navire')
            ->andWhere('p.id = :per')
            ->setParameter('archived', 0)
            ->setParameter('navire', $navire)
            ->setParameter('per', $per)
            ->getQuery();

        return $query->getResult();
    }


//    /**
//     * @return Mouvement[] Returns an array of Mouvement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Mouvement
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
