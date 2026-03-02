<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'urgence')]
class Urgence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'float')]
    private ?float $latitude = null;

    #[ORM\Column(type: 'float')]
    private ?float $longitude = null;

    #[ORM\Column(type: 'text')]
    private ?string $message = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\Column(name: 'date_urgence', type: 'datetime')]
    private ?\DateTimeInterface $dateUrgence = null;

    // GETTERS / SETTERS

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getDateUrgence(): ?\DateTimeInterface
    {
        return $this->dateUrgence;
    }

    public function setDateUrgence(\DateTimeInterface $dateUrgence): self
    {
        $this->dateUrgence = $dateUrgence;
        return $this;
    }
}
