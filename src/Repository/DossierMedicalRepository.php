<?php

namespace App\Repository;

use App\Entity\DossierMedical;
use App\Entity\User;
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
     * Récupérer le dossier médical d’un utilisateur (version simplifiée / unique)
     */
    public function findOneByUser(User $user): ?DossierMedical
    {
        return $this->findOneBy(['user' => $user]);
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
     * Version alternative : tous les dossiers triés par nom patient
     */
    public function findAllDossiers(): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.user', 'u')
            ->addSelect('u')
            ->orderBy('u.nom', 'ASC')
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
     * Récupérer les dossiers par rôle utilisateur (ex: seulement patients)
     * @return DossierMedical[]
     */
    public function findByUserRole(UserRole $role): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.user', 'u')
            ->addSelect('u')
            ->where('u.userRole = :role')
            ->setParameter('role', $role)
            ->orderBy('d.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer uniquement les dossiers des patients
     */
    public function findPatientDossiers(): array
    {
        return $this->findByUserRole(UserRole::PATIENT);
    }

    /**
     * Compter le nombre total de dossiers
     */
    public function countAll(): int
    {
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupérer les dossiers récents (par défaut 7 derniers jours)
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
     * Récupérer les dossiers qui n'ont pas été mis à jour depuis longtemps
     * @return DossierMedical[]
     */
    public function findNeedingUpdate(int $months = 6): array
    {
        $date = new \DateTime("-{$months} months");

        return $this->createQueryBuilder('d')
            ->where('d.derniereMiseAJour < :date OR d.derniereMiseAJour IS NULL')
            ->setParameter('date', $date)
            ->orderBy('d.derniereMiseAJour', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compter le nombre de dossiers pour un utilisateur donné
     */
    public function countByUser(User $user): int
    {
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->where('d.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }
}