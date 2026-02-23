<?php

namespace App\Repository;

use App\Entity\Front_office\Hopital;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

class HopitalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hopital::class);
    }

    // ====================================================
    // ✅ NOUVEAU — pour KnpPaginatorBundle
    // Retourne un QueryBuilder (pas getResult())
    // ====================================================
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

    // ✅ NOUVEAU — pour KnpPaginator + recherche
    public function createSearchQueryBuilder(string $term = ''): QueryBuilder
    {
        $qb = $this->createQueryBuilder('h')
            ->orderBy('h.nom', 'ASC');

        if (!empty($term)) {
            $qb->where('h.nom LIKE :term')
               ->orWhere('h.adresse LIKE :term')
               ->orWhere('h.tel LIKE :term')
               ->setParameter('term', '%' . $term . '%');
        }

        return $qb;
    }

    // ====================================================
    // Vos méthodes existantes — INCHANGÉES
    // ====================================================

    public function search(string $term): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.nom LIKE :term')
            ->orWhere('h.adresse LIKE :term')
            ->orWhere('h.tel LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('h.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function searchPaginated(string $term, int $page = 1, int $limit = 10, string $sort = 'nom'): array
    {
        $qb = $this->createQueryBuilder('h')
            ->where('h.nom LIKE :term')
            ->orWhere('h.adresse LIKE :term')
            ->orWhere('h.tel LIKE :term')
            ->setParameter('term', '%' . $term . '%');

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

        $total = count($qb->getQuery()->getResult());
        $offset = ($page - 1) * $limit;
        $data = $qb->setFirstResult($offset)->setMaxResults($limit)->getQuery()->getResult();

        return ['data' => $data, 'total' => $total];
    }

    public function findPaginated(int $page = 1, int $limit = 10, string $sort = 'nom'): array
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

        $total = count($qb->getQuery()->getResult());
        $offset = ($page - 1) * $limit;
        $data = $qb->setFirstResult($offset)->setMaxResults($limit)->getQuery()->getResult();

        return ['data' => $data, 'total' => $total];
    }
}