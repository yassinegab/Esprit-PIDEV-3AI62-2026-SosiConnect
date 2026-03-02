<?php

namespace App\Entity;

use App\Repository\SupportTicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: SupportTicketRepository::class)]
#[ORM\Table(name: 'support_ticket')]
#[Vich\Uploadable]
class SupportTicket
{
    public const STATUS_OPEN = 'open';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_RESOLVED = 'resolved';
    public const STATUS_CLOSED = 'closed';

    public const PRIORITY_LOW = 'low';
    public const PRIORITY_MEDIUM = 'medium';
    public const PRIORITY_HIGH = 'high';
    public const PRIORITY_URGENT = 'urgent';
    public const PRIORITY_CRITICAL = 'critical';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private string $subject;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private string $description;

    #[ORM\Column(length: 20)]
    private string $status = self::STATUS_OPEN;

    #[ORM\Column(length: 20)]
    private string $priority = self::PRIORITY_MEDIUM;

    #[ORM\Column(length: 50)]
    private string $category = 'general';

    #[ORM\Column(name: 'user_email', length: 180)]
    #[Assert\Email]
    private string $userEmail;

    #[ORM\Column(name: 'user_name', length: 100)]
    private string $userName;

    #[ORM\Column(name: 'assigned_to', length: 100, nullable: true)]
    private ?string $assignedTo = null;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(name: 'resolved_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $resolvedAt = null;

    #[ORM\Column(name: 'attachment_name', length: 255, nullable: true)]
    private ?string $attachmentName = null;

    #[ORM\OneToMany(mappedBy: 'ticket', targetEntity: ChatMessage::class, cascade: ['persist'])]
    private Collection $messages;

    #[Vich\UploadableField(mapping: 'support_attachment', fileNameProperty: 'attachmentName')]
    #[Assert\File(
        maxSize: '5M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'],
        mimeTypesMessage: 'Veuillez uploader une image (JPG, PNG, GIF) ou un fichier PDF'
    )]
    private ?File $attachmentFile = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->messages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        if ($status === self::STATUS_RESOLVED || $status === self::STATUS_CLOSED) {
            $this->resolvedAt = new \DateTime();
        }
        return $this;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }

    public function setPriority(string $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?string $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getResolvedAt(): ?\DateTimeInterface
    {
        return $this->resolvedAt;
    }

    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(ChatMessage $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setTicket($this);
        }
        return $this;
    }

    public function getStatusBadgeClass(): string
    {
        return match ($this->status) {
            self::STATUS_OPEN => 'bg-blue-100 text-blue-700',
            self::STATUS_IN_PROGRESS => 'bg-yellow-100 text-yellow-700',
            self::STATUS_RESOLVED => 'bg-green-100 text-green-700',
            self::STATUS_CLOSED => 'bg-gray-100 text-gray-700',
            default => 'bg-gray-100 text-gray-700',
        };
    }

    public function getPriorityBadgeClass(): string
    {
        return match ($this->priority) {
            self::PRIORITY_CRITICAL, self::PRIORITY_URGENT => 'bg-red-100 text-red-700',
            self::PRIORITY_HIGH => 'bg-orange-100 text-orange-700',
            self::PRIORITY_MEDIUM => 'bg-yellow-100 text-yellow-700',
            self::PRIORITY_LOW => 'bg-green-100 text-green-700',
            default => 'bg-gray-100 text-gray-700',
        };
    }

    public function getAttachmentFile(): ?File
    {
        return $this->attachmentFile;
    }

    public function setAttachmentFile(?File $attachmentFile = null): self
    {
        $this->attachmentFile = $attachmentFile;
        if (null !== $attachmentFile) {
            $this->updatedAt = new \DateTime();
        }
        return $this;
    }

    public function getAttachmentName(): ?string
    {
        return $this->attachmentName;
    }

    public function setAttachmentName(?string $attachmentName): self
    {
        $this->attachmentName = $attachmentName;
        return $this;
    }
}
