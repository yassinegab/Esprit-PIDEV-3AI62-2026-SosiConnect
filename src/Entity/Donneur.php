<?php

namespace App\Entity;

use App\Repository\DonneurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: DonneurRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[Vich\Uploadable]
class Donneur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(length: 15)]
    private ?string $telephone = null;

    #[ORM\Column(name: 'groupe_sanguin', length: 3)]
    private ?string $groupeSanguin = null;

    #[ORM\Column(type: 'boolean')]
    private bool $disponible = true;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(name: 'date_dernier_don', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dateDernierDon = null;

    #[ORM\Column(name: 'profile_image_name', length: 255, nullable: true)]
    private ?string $profileImageName = null;

    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[Vich\UploadableField(mapping: 'donneur_image', fileNameProperty: 'profileImageName')]
    private ?File $profileImageFile = null;

    /* ================== LIFECYCLE ================== */

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        if ($this->createdAt === null) {
            $this->createdAt = new \DateTime();
        }
    }

    /* ================== GETTERS / SETTERS ================== */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getGroupeSanguin(): ?string
    {
        return $this->groupeSanguin;
    }

    public function setGroupeSanguin(string $groupeSanguin): self
    {
        $this->groupeSanguin = $groupeSanguin;
        return $this;
    }

    public function isDisponible(): bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getDateDernierDon(): ?\DateTimeInterface
    {
        return $this->dateDernierDon;
    }

    public function setDateDernierDon(?\DateTimeInterface $dateDernierDon): self
    {
        $this->dateDernierDon = $dateDernierDon;
        return $this;
    }

    public function getProfileImageFile(): ?File
    {
        return $this->profileImageFile;
    }

    public function setProfileImageFile(?File $profileImageFile = null): self
    {
        $this->profileImageFile = $profileImageFile;
        if (null !== $profileImageFile) {
            $this->updatedAt = new \DateTime();
        }
        return $this;
    }

    public function getProfileImageName(): ?string
    {
        return $this->profileImageName;
    }

    public function setProfileImageName(?string $profileImageName): self
    {
        $this->profileImageName = $profileImageName;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
