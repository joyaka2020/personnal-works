<?php

namespace App\Repository;

use App\Entity\Movie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Movie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Movie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Movie[]    findAll()
 * @method Movie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Movie::class);
    }

    /**
     * Retrouve les 10 derniers films, par ordre des création décroissants
     * @return Movie[] Returns an array of Movie objects
     */
    public function findLastTen()
    {
        // Dans un Repository, la méthode createQueryBuilder()
        // nous donne un QB sur l'entitté du Repository, ici Movie
        // C'est-à-dire qu'il y a déjà un SELECT et un FROM sur Movie
        // (parce qu'on est dans MovieRepositor)
        return $this->createQueryBuilder('m')
               // m est un alias de notre entité, il nous sert à l'identifier dans les autres méthodes
            // On ordonne les résultats par date de création décroissante
            // On fait appel à la propriété createdAt avec le symbole . (point)
            ->orderBy('m.createdAt', 'DESC')
            // On anonce qu'on ne veut que les 10 premiers résultats
            ->setMaxResults(10)
            // getQuery() nous transforme l'objet QueryBuilder en un objet de la classe Query
            // Cet objet contient le DQL (Doctrine Query Language) correspondant à ce qu'on à «construit» avec le QB
            ->getQuery()
            // getResult() exécute la requête DQL et nous donne les résultats dans des objets
            ->getResult()
        ;
    }

    /**
     * Retrouve un objet Movie avec toutes ses relations en fonction d'un id
     * 
     * @return Movie|null
     */
    public function findWithRelations(int $id): ?Movie
    {
        $qb = $this->createQueryBuilder('m');

        // On veut sélectionner un seul Movie
        $qb->where('m.id = :id')
            ->setParameter('id', $id)
        ;

        // On fait une jointure avec les genres
        $qb->leftJoin('m.genres', 'g')
            ->addSelect('g')
        ;

        // On fait une jointure avec les castings
        $qb->leftJoin('m.castings', 'c')
            ->addSelect('c')
        ;

        // On fait une jointure entre Casting et Person
        $qb->leftJoin('c.person', 'p')
            ->addSelect('p')
        ;        

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findTotalMovies()
    {
        return $this->createQueryBuilder('m')
            ->select('COUNT(m)')
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }
}
