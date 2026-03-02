<?php

namespace App\Entity;

use App\Repository\SupportFeedbackRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SupportFeedbackRepository::class)]
#[ORM\Table(name: 'support_feedback')]
class SupportFeedback
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: SupportTicket::class)]
    #[ORM\JoinColumn(name: 'ticket_id', nullable: false)]
    private ?SupportTicket $ticket = null;

    #[ORM\Column]
    #[Assert\Range(min: 1, max: 5)]
    private int $rating = 5;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $comment = null;

    #[ORM\Column(length: 50)]
    private string $feedbackType = 'general';

    #[ORM\Column]
    private bool $wouldRecommend = true;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = max(1, min(5, $rating));
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getFeedbackType(): string
    {
        return $this->feedbackType;
    }

    public function setFeedbackType(string $feedbackType): self
    {
        $this->feedbackType = $feedbackType;
        return $this;
    }

    public function wouldRecommend(): bool
    {
        return $this->wouldRecommend;
    }

    public function setWouldRecommend(bool $wouldRecommend): self
    {
        $this->wouldRecommend = $wouldRecommend;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getRatingLabel(): string
    {
        return match ($this->rating) {
            5 => 'Excellent',
            4 => 'Très bien',
            3 => 'Bien',
            2 => 'Passable',
            default => 'À améliorer',
        };
    }
}
