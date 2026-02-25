<?php

namespace App\Service;

use Doctrine\ORM\QueryBuilder;

class Paginator
{
    public function paginate(QueryBuilder $qb, int $page = 1, int $perPage = 10): array
    {
        $page = max(1, $page);
        $perPage = max(1, $perPage);

        $countQb = clone $qb;
        $total = (int) $countQb->select('COUNT(DISTINCT ' . $qb->getRootAliases()[0] . '.id)')->getQuery()->getSingleScalarResult();

        $offset = ($page - 1) * $perPage;
        $items = $qb->setFirstResult($offset)->setMaxResults($perPage)->getQuery()->getResult();

        $totalPages = (int) ceil(($total ?: 1) / $perPage);

        return [
            'items' => $items,
            'total' => $total,
            'page' => $page,
            'perPage' => $perPage,
            'totalPages' => $totalPages,
            'hasPrev' => $page > 1,
            'hasNext' => $page < $totalPages,
            'prevPage' => $page > 1 ? $page - 1 : null,
            'nextPage' => $page < $totalPages ? $page + 1 : null,
        ];
    }
}

