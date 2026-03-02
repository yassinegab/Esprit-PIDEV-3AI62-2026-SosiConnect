<?php

namespace App\Entity;

use App\Repository\ChatMessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ChatMessageRepository::class)]
#[ORM\Table(name: 'chat_message')]
class ChatMessage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private string $content;

    #[ORM\Column(name: 'sender_name', length: 100)]
    private string $senderName;

    #[ORM\Column(name: 'sender_type', length: 20)]
    private string $senderType = 'user';

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[ORM\Column]
    private bool $isRead = false;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    #[ORM\JoinColumn(name: 'ticket_id', nullable: false)]
    private ?SupportTicket $ticket = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function setSenderName(string $senderName): self
    {
        $this->senderName = $senderName;
        return $this;
    }

    public function getSenderType(): string
    {
        return $this->senderType;
    }

    public function setSenderType(string $senderType): self
    {
        $this->senderType = $senderType;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function isRead(): bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): self
    {
        $this->isRead = $isRead;
        return $this;
    }

    public function getTicket(): ?SupportTicket
    {
        return $this->ticket;
    }

    public function setTicket(?SupportTicket $ticket): self
    {
        $this->ticket = $ticket;
        return $this;
    }

    public function isFromAdmin(): bool
    {
        return $this->senderType === 'admin';
    }
}
