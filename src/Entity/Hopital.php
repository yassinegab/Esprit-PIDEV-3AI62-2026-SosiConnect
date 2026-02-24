<?php

namespace App\Entity;

use App\Repository\HopitalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;                 // StofDoctrineExtensionsBundle
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: HopitalRepository::class)]
class Hopital
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de l'hôpital est obligatoire")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'adresse est obligatoire")]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: "L'adresse doit contenir au moins {{ limit }} caractères",
        maxMessage: "L'adresse ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire")]
    #[Assert\Regex(
        pattern: "/^[0-9\s\+\-\(\)]+$/",
        message: "Le numéro de téléphone n'est pas valide"
    )]
    private ?string $tel = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Veuillez indiquer si le service d'urgence est disponible")]
    private ?bool $serviceUrgenceDispo = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(
        min: -90,
        max: 90,
        notInRangeMessage: "La latitude doit être entre {{ min }} et {{ max }}"
    )]
    private ?float $latitude = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(
        min: -180,
        max: 180,
        notInRangeMessage: "La longitude doit être entre {{ min }} et {{ max }}"
    )]
    private ?float $longitude = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Positive(message: "La capacité doit être un nombre positif")]
    #[Assert\Range(
        min: 1,
        max: 10000,
        notInRangeMessage: "La capacité doit être entre {{ min }} et {{ max }}"
    )]
    private ?int $capacite = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $specialites = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $type = null;

    // ====================================================
    // VichUploaderBundle — champs pour l'image
    // ====================================================

    #[Vich\UploadableField(mapping: 'hopital_image', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    // ====================================================
    // StofDoctrineExtensionsBundle — timestampable
    // ====================================================

    #[Gedmo\Timestampable(on: 'create')]
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    // ====================================================
    // Relation OneToMany avec RendezVous
    // ====================================================

    #[ORM\OneToMany(targetEntity: RendezVous::class, mappedBy: 'hopital', orphanRemoval: true)]
    private Collection $rendezVous;

    public function __construct()
    {
        $this->rendezVous = new ArrayCollection();
    }

    // ====================================================
    // Getters & Setters VichUploader
    // ====================================================

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
        if (null !== $imageFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    // ====================================================
    // Getters & Setters classiques
    // ====================================================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): static
    {
        $this->tel = $tel;
        return $this;
    }

    public function isServiceUrgenceDispo(): ?bool
    {
        return $this->serviceUrgenceDispo;
    }

    public function setServiceUrgenceDispo(?bool $serviceUrgenceDispo): static
    {
        $this->serviceUrgenceDispo = $serviceUrgenceDispo;
        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): static
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): static
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(?int $capacite): static
    {
        $this->capacite = $capacite;
        return $this;
    }

    public function getSpecialites(): ?string
    {
        return $this->specialites;
    }

    public function setSpecialites(?string $specialites): static
    {
        $this->specialites = $specialites;
        return $this;
    }

    public function getSpecialitesArray(): array
    {
        if (empty($this->specialites)) {
            return [];
        }
        return array_map('trim', explode(',', $this->specialites));
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return Collection<int, RendezVous>
     */
    public function getRendezVous(): Collection
    {
        return $this->rendezVous;
    }

    public function addRendezVous(RendezVous $rendezVous): static
    {
        if (!$this->rendezVous->contains($rendezVous)) {
            $this->rendezVous->add($rendezVous);
            $rendezVous->setHopital($this);
        }

        return $this;
    }

    public function removeRendezVous(RendezVous $rendezVous): static
    {
        if ($this->rendezVous->removeElement($rendezVous)) {
            // set the owning side to null (unless already changed)
            if ($rendezVous->getHopital() === $this) {
                $rendezVous->setHopital(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nom ?? 'Hôpital';
    }
}