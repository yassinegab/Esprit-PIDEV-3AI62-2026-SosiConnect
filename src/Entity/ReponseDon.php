<?php

namespace App\Entity;

use App\Repository\ReponseDonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseDonRepository::class)]
#[ORM\Table(name: 'reponse_don')]
class ReponseDon
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_ACCEPTED = 'accepted';
    public const STATUS_REJECTED = 'rejected';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    #[ORM\JoinColumn(name: 'demande_id', nullable: false)]
    private ?DemandeDon $demande = null;

    #[ORM\Column(name: 'donneur_nom', length: 100)]
    private string $donneurNom;

    #[ORM\Column(name: 'donneur_email', length: 180)]
    private string $donneurEmail;

    #[ORM\Column(name: 'donneur_telephone', length: 20)]
    private string $donneurTelephone;

    #[ORM\Column(name: 'donneur_groupe_sanguin', length: 5, nullable: true)]
    private ?string $donneurGroupeSanguin = null;

    #[ORM\Column(type: 'text')]
    private string $message;

    #[ORM\Column(length: 20)]
    private string $status = self::STATUS_PENDING;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(name: 'responded_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $respondedAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDemande(): ?DemandeDon
    {
        return $this->demande;
    }

    public function setDemande(?DemandeDon $demande): self
    {
        $this->demande = $demande;
        return $this;
    }

    public function getDonneurNom(): string
    {
        return $this->donneurNom;
    }

    public function setDonneurNom(string $donneurNom): self
    {
        $this->donneurNom = $donneurNom;
        return $this;
    }

    public function getDonneurEmail(): string
    {
        return $this->donneurEmail;
    }

    public function setDonneurEmail(string $donneurEmail): self
    {
        $this->donneurEmail = $donneurEmail;
        return $this;
    }

    public function getDonneurTelephone(): string
    {
        return $this->donneurTelephone;
    }

    public function setDonneurTelephone(string $donneurTelephone): self
    {
        $this->donneurTelephone = $donneurTelephone;
        return $this;
    }

    public function getDonneurGroupeSanguin(): ?string
    {
        return $this->donneurGroupeSanguin;
    }

    public function setDonneurGroupeSanguin(?string $donneurGroupeSanguin): self
    {
        $this->donneurGroupeSanguin = $donneurGroupeSanguin;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
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

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getRespondedAt(): ?\DateTimeInterface
    {
        return $this->respondedAt;
    }

    public function setRespondedAt(?\DateTimeInterface $respondedAt): self
    {
        $this->respondedAt = $respondedAt;
        return $this;
    }

    public function accept(): self
    {
        $this->status = self::STATUS_ACCEPTED;
        $this->respondedAt = new \DateTime();
        return $this;
    }

    public function reject(): self
    {
        $this->status = self::STATUS_REJECTED;
        $this->respondedAt = new \DateTime();
        return $this;
    }

    public function getStatusBadgeClass(): string
    {
        return match ($this->status) {
            self::STATUS_ACCEPTED => 'bg-green-100 text-green-700',
            self::STATUS_REJECTED => 'bg-red-100 text-red-700',
            default => 'bg-yellow-100 text-yellow-700',
        };
    }

    public function getStatusLabel(): string
    {
        return match ($this->status) {
            self::STATUS_ACCEPTED => 'Accepté',
            self::STATUS_REJECTED => 'Refusé',
            default => 'En attente',
        };
    }
}
