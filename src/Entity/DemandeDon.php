<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class DemandeDon
{
    public const STATUS_OPEN = 'open';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_FULFILLED = 'fulfilled';
    public const STATUS_CLOSED = 'closed';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private string $typeDemande;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $typeOrgane = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $typeSanguin = null;

    #[ORM\Column(length: 50)]
    private string $region;

    #[ORM\Column(type: 'boolean')]
    private bool $urgence = false;

    #[ORM\Column]
    private int $rangAttente = 1;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $dateDemande;

    #[ORM\Column(length: 20)]
    private string $status = self::STATUS_OPEN;

    #[ORM\Column(name: 'patient_nom', length: 100, nullable: true)]
    private ?string $patientNom = null;

    #[ORM\Column(name: 'patient_email', length: 180, nullable: true)]
    private ?string $patientEmail = null;

    #[ORM\Column(name: 'patient_telephone', length: 20, nullable: true)]
    private ?string $patientTelephone = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'demande', targetEntity: ReponseDon::class, cascade: ['persist'])]
    private Collection $reponses;

    public function __construct()
    {
        $this->dateDemande = new \DateTime();
        $this->reponses = new ArrayCollection();
    }

    /* ================= GETTERS / SETTERS ================= */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeDemande(): string
    {
        return $this->typeDemande;
    }

    public function setTypeDemande(string $typeDemande): self
    {
        $this->typeDemande = $typeDemande;
        return $this;
    }

    public function getTypeOrgane(): ?string
    {
        return $this->typeOrgane;
    }

    public function setTypeOrgane(?string $typeOrgane): self
    {
        $this->typeOrgane = $typeOrgane;
        return $this;
    }

    public function getTypeSanguin(): ?string
    {
        return $this->typeSanguin;
    }

    public function setTypeSanguin(?string $typeSanguin): self
    {
        $this->typeSanguin = $typeSanguin;
        return $this;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function isUrgence(): bool
    {
        return $this->urgence;
    }

    public function setUrgence(bool $urgence): self
    {
        $this->urgence = $urgence;
        return $this;
    }

    public function getRangAttente(): int
    {
        return $this->rangAttente;
    }

    public function setRangAttente(int $rangAttente): self
    {
        $this->rangAttente = $rangAttente;
        return $this;
    }

    public function getDateDemande(): \DateTimeInterface
    {
        return $this->dateDemande;
    }

public function setDateDemande(\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getPatientNom(): ?string
    {
        return $this->patientNom;
    }

    public function setPatientNom(?string $patientNom): self
    {
        $this->patientNom = $patientNom;
        return $this;
    }

    public function getPatientEmail(): ?string
    {
        return $this->patientEmail;
    }

    public function setPatientEmail(?string $patientEmail): self
    {
        $this->patientEmail = $patientEmail;
        return $this;
    }

    public function getPatientTelephone(): ?string
    {
        return $this->patientTelephone;
    }

    public function setPatientTelephone(?string $patientTelephone): self
    {
        $this->patientTelephone = $patientTelephone;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(ReponseDon $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setDemande($this);
        }
        return $this;
    }

    public function removeReponse(ReponseDon $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            if ($reponse->getDemande() === $this) {
                $reponse->setDemande(null);
            }
        }
        return $this;
    }

    public function getResponseCount(): int
    {
        return $this->reponses->count();
    }

    public function getStatusBadgeClass(): string
    {
        return match ($this->status) {
            self::STATUS_FULFILLED => 'bg-green-100 text-green-700',
            self::STATUS_IN_PROGRESS => 'bg-blue-100 text-blue-700',
            self::STATUS_CLOSED => 'bg-gray-100 text-gray-700',
            default => 'bg-yellow-100 text-yellow-700',
        };
    }

    public function getStatusLabel(): string
    {
        return match ($this->status) {
            self::STATUS_FULFILLED => 'Comblée',
            self::STATUS_IN_PROGRESS => 'En cours',
            self::STATUS_CLOSED => 'Fermée',
            default => 'Ouverte',
        };
    }
}
