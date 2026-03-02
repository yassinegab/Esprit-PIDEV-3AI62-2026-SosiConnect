<?php

namespace App\Entity;

use App\Repository\DonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: DonRepository::class)]
#[Vich\Uploadable]
class Don
{
    public const STATUSES = ['EN_ATTENTE', 'VALIDÉ', 'REFUSÉ'];
    public const TYPES_DON = ['sang', 'organe'];
    public const TYPES_SANGUIN = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
    public const TYPES_ORGANE = ['cœur', 'rein', 'foie', 'poumon', 'cornée', 'moelle'];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: 'type_don', length: 20)]
    #[Assert\NotBlank(message: 'Le type de don est obligatoire')]
    #[Assert\Choice(choices: self::TYPES_DON, message: 'Type de don invalide')]
    private string $typeDon;

    #[ORM\Column(name: 'type_sanguin', length: 10, nullable: true)]
    #[Assert\Choice(choices: self::TYPES_SANGUIN, message: 'Groupe sanguin invalide')]
    private ?string $typeSanguin = null;

    #[ORM\Column(name: 'type_organe', length: 50, nullable: true)]
    private ?string $typeOrgane = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'La région est obligatoire')]
    #[Assert\Length(min: 2, max: 50, minMessage: 'La région doit contenir au moins {{ limit }} caractères')]
    private string $region;

    #[ORM\Column]
    private bool $urgence = false;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: self::STATUSES, message: 'Statut invalide')]
    private string $statut = 'EN_ATTENTE';

    #[ORM\Column(name: 'date_don', type: 'datetime')]
    private \DateTime $dateDon;

    #[ORM\Column(name: 'document_name', length: 255, nullable: true)]
    private ?string $documentName = null;

    #[ORM\Column(name: 'document_size', type: 'integer', nullable: true)]
    private ?int $documentSize = null;

    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: true)]
    private ?\DateTime $updatedAt = null;

    #[Vich\UploadableField(mapping: 'don_document', fileNameProperty: 'documentName', size: 'documentSize')]
    #[Assert\File(
        maxSize: '10M',
        mimeTypes: ['application/pdf', 'image/jpeg', 'image/png', 'image/gif'],
        mimeTypesMessage: 'Veuillez uploader un fichier PDF ou image (JPG, PNG, GIF)'
    )]
    private ?File $documentFile = null;

    public function __construct()
    {
        $this->dateDon = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeDon(): string
    {
        return $this->typeDon;
    }

    public function setTypeDon(string $typeDon): self
    {
        $this->typeDon = $typeDon;
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

    public function getTypeOrgane(): ?string
    {
        return $this->typeOrgane;
    }

    public function setTypeOrgane(?string $typeOrgane): self
    {
        $this->typeOrgane = $typeOrgane;
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

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getDateDon(): \DateTime
    {
        return $this->dateDon;
    }

    public function setDateDon(\DateTime $dateDon): self
    {
        $this->dateDon = $dateDon;
        return $this;
    }

    public function getStatusBadgeClass(): string
    {
        return match ($this->statut) {
            'VALIDÉ' => 'bg-green-100 text-green-700',
            'REFUSÉ' => 'bg-red-100 text-red-700',
            default => 'bg-yellow-100 text-yellow-700',
        };
    }

    public function getStatusIcon(): string
    {
        return match ($this->statut) {
            'VALIDÉ' => '✔',
            'REFUSÉ' => '✖',
            default => '⏳',
        };
    }

    public function getDocumentFile(): ?File
    {
        return $this->documentFile;
    }

    public function setDocumentFile(?File $documentFile = null): self
    {
        $this->documentFile = $documentFile;
        if (null !== $documentFile) {
            $this->updatedAt = new \DateTime();
        }
        return $this;
    }

    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }

    public function setDocumentName(?string $documentName): self
    {
        $this->documentName = $documentName;
        return $this;
    }

    public function getDocumentSize(): ?int
    {
        return $this->documentSize;
    }

    public function setDocumentSize(?int $documentSize): self
    {
        $this->documentSize = $documentSize;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
