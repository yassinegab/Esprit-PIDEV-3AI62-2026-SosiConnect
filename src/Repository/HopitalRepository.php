<?php

namespace App\Repository;

use App\Entity\Hopital;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hopital>
 */
class HopitalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hopital::class);
    }

    /**
     * QueryBuilder de base pour tous les hôpitaux (utilisé par KnpPaginator)
     * Permet de trier par nom, capacité ou urgence
     */
    public function createQueryBuilderAll(string $sort = 'nom'): QueryBuilder
    {
        $qb = $this->createQueryBuilder('h');

        switch ($sort) {
            case 'capacite':
                $qb->orderBy('h.capacite', 'DESC');
                break;
            case 'urgence':
                $qb->orderBy('h.serviceUrgenceDispo', 'DESC')
                   ->addOrderBy('h.nom', 'ASC');
                break;
            default:
                $qb->orderBy('h.nom', 'ASC');
        }

        return $qb;
    }

    /**
     * QueryBuilder avec recherche textuelle (nom, adresse, téléphone)
     * Idéal pour KnpPaginator + barre de recherche
     */
    public function createSearchQueryBuilder(string $term = ''): QueryBuilder
    {
        $qb = $this->createQueryBuilder('h')
            ->orderBy('h.nom', 'ASC');

        if (!empty($term)) {
            $qb->andWhere('h.nom LIKE :term OR h.adresse LIKE :term OR h.tel LIKE :term')
               ->setParameter('term', '%' . $term . '%');
        }

        return $qb;
    }

    /**
     * Recherche simple (retourne directement les résultats)
     * Utile pour les autocomplétions ou petites listes
     * @return Hopital[]
     */
    public function search(string $term): array
    {
        return $this->createSearchQueryBuilder($term)
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche paginée avec tri (retourne data + total)
     * Compatible avec pagination manuelle ou Twig
     */
    public function searchPaginated(
        string $term = '',
        int $page = 1,
        int $limit = 10,
        string $sort = 'nom'
    ): array {
        $qb = $this->createSearchQueryBuilder($term);

        // Appliquer le tri
        switch ($sort) {
            case 'capacite':
                $qb->orderBy('h.capacite', 'DESC');
                break;
            case 'urgence':
                $qb->orderBy('h.serviceUrgenceDispo', 'DESC')
                   ->addOrderBy('h.nom', 'ASC');
                break;
            default:
                $qb->orderBy('h.nom', 'ASC');
        }

        // Compter le total (sans limit/offset)
        $total = (int) $qb->select('COUNT(h.id)')->getQuery()->getSingleScalarResult();

        // Pagination
        $offset = ($page - 1) * $limit;
        $data = $qb->setFirstResult($offset)
                   ->setMaxResults($limit)
                   ->getQuery()
                   ->getResult();

        return [
            'data'  => $data,
            'total' => $total,
        ];
    }

    /**
     * Liste paginée de tous les hôpitaux (sans recherche)
     */
    public function findPaginated(
        int $page = 1,
        int $limit = 10,
        string $sort = 'nom'
    ): array {
        $qb = $this->createQueryBuilderAll($sort);

        // Compter le total
        $total = (int) $qb->select('COUNT(h.id)')->getQuery()->getSingleScalarResult();

        // Pagination
        $offset = ($page - 1) * $limit;
        $data = $qb->setFirstResult($offset)
                   ->setMaxResults($limit)
                   ->getQuery()
                   ->getResult();

        return [
            'data'  => $data,
            'total' => $total,
        ];
    }
}