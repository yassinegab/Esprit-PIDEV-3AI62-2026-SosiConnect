<?php

namespace App\Repository;

use App\Entity\User;  // ou App\Entity\User si tu as migré
use App\Enum\UserRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 * @implements PasswordUpgraderInterface
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Nécessaire pour le changement de mot de passe (Symfony Security)
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    /**
     * Compte le nombre de médecins
     */
    public function countMedecins(): int
    {
        return $this->count(['userRole' => UserRole::MEDECIN]);
    }

    /**
     * Compte le nombre de patients
     */
    public function countPatients(): int
    {
        return $this->count(['userRole' => UserRole::PATIENT]);
    }

    /**
     * Compte le nombre d'administrateurs
     */
    public function countAdmins(): int
    {
        return $this->count(['userRole' => UserRole::ADMIN]);
    }

    /**
     * Trouve tous les médecins (via userRole enum)
     */
    public function findAllMedecins(): array
    {
        return $this->findBy(['userRole' => UserRole::MEDECIN]);
    }

    /**
     * Trouve tous les patients (via userRole enum)
     */
    public function findAllPatients(): array
    {
        return $this->findBy(['userRole' => UserRole::PATIENT]);
    }

    /**
     * Trouve les utilisateurs par rôle (via le champ roles JSON Symfony)
     */
    public function findByRole(string $role): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%"' . $role . '"%')
            ->orderBy('u.prenom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Alias pour findAllMedecins() – version avec roles LIKE (plus robuste si plusieurs rôles)
     */
    public function findMedecins(): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%"ROLE_MEDECIN"%')
            ->orderBy('u.prenom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Alias pour findAllPatients() – version avec roles LIKE
     */
    public function findPatients(): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%"ROLE_PATIENT"%')
            ->orderBy('u.prenom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}