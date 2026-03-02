<?php

namespace App\Entity;

use App\Repository\LieuMedicalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuMedicalRepository::class)]
class LieuMedical
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 100)]
    private string $nom;


    #[ORM\Column(length: 50)]
    private string $categorie;


    #[ORM\Column(length: 255)]
    private string $adresse;


    #[ORM\Column(length: 20, nullable: true)]
    private ?string $telephone = null;


    #[ORM\Column(type: 'float')]
    private float $latitude;


    #[ORM\Column(type: 'float')]
    private float $longitude;


    #[ORM\Column(type: 'datetime')]
    private \DateTime $dateCreation;


    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }


    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }


    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }


    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }


    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }


    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }


    public function getDateCreation(): \DateTime
    {
        return $this->dateCreation;
    }

}
