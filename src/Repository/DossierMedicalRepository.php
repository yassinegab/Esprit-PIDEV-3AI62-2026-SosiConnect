<?php

namespace App\Repository;

use App\Entity\Front_office\DossierMedical;
use App\Entity\Front_office\User;
use App\Enum\UserRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DossierMedical>
 */
class DossierMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DossierMedical::class);
    }

    /**
     * Récupérer tous les dossiers médicaux d'un utilisateur
     * @return DossierMedical[]
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->setParameter('user', $user)
            ->orderBy('d.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer le dernier dossier médical d'un utilisateur
     */
    public function findLastByUser(User $user): ?DossierMedical
    {
        return $this->createQueryBuilder('d')
            ->where('d.user = :user')
            ->setParameter('user', $user)
            ->orderBy('d.dateCreation', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Vérifier si un utilisateur possède au moins un dossier médical
     */
    public function existsForUser(User $user): bool
    {
        $count = $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->where('d.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();

        return $count > 0;
    }

    /**
     * Récupérer tous les dossiers médicaux avec leurs utilisateurs (ADMIN / MEDECIN)
     * @return DossierMedical[]
     */
    public function findAllWithUsers(): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.user', 'u')
            ->addSelect('u')
            ->orderBy('d.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Rechercher des dossiers par nom, prénom ou email du patient
     * @return DossierMedical[]
     */
    public function searchByPatientName(string $query): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.user', 'u')
            ->addSelect('u')
            ->where('u.nom LIKE :query')
            ->orWhere('u.prenom LIKE :query')
            ->orWhere('u.email LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('d.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer les dossiers médicaux par rôle utilisateur
     * ✅ CORRECTION: Utiliser userRole au lieu de role
     * @return DossierMedical[]
     */
    public function findByUserRole(UserRole $role): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.user', 'u')
            ->addSelect('u')
            ->where('u.userRole = :role')  // ✅ CORRECTION ICI
            ->setParameter('role', $role)
            ->orderBy('d.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compter le nombre de dossiers médicaux
     */
    public function countAll(): int
    {
        return $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupérer les dossiers médicaux récents (7 derniers jours)
     * @return DossierMedical[]
     */
    public function findRecent(int $days = 7): array
    {
        $date = new \DateTime("-{$days} days");

        return $this->createQueryBuilder('d')
            ->where('d.dateCreation >= :date')
            ->setParameter('date', $date)
            ->orderBy('d.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer les dossiers nécessitant une mise à jour (plus de 6 mois)
     * @return DossierMedical[]
     */
    public function findNeedingUpdate(): array
    {
        $sixMonthsAgo = new \DateTime('-6 months');

        return $this->createQueryBuilder('d')
            ->where('d.derniereMiseAJour < :date')
            ->setParameter('date', $sixMonthsAgo)
            ->orderBy('d.derniereMiseAJour', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer les dossiers des patients uniquement
     * @return DossierMedical[]
     */
    public function findPatientDossiers(): array
    {
        return $this->findByUserRole(UserRole::PATIENT);
    }

    /**
     * Statistiques : nombre de dossiers par utilisateur
     */
    public function countByUser(User $user): int
    {
        return $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->where('d.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }
}