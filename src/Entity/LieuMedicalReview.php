<?php

namespace App\Entity;

use App\Repository\LieuMedicalReviewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LieuMedicalReviewRepository::class)]
#[ORM\Table(name: 'lieu_medical_review')]
class LieuMedicalReview
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: LieuMedical::class)]
    #[ORM\JoinColumn(name: 'lieu_id', nullable: false)]
    private ?LieuMedical $lieu = null;

    #[ORM\Column(length: 100)]
    private string $authorName;

    #[ORM\Column(length: 180)]
    private string $authorEmail;

    #[ORM\Column]
    #[Assert\Range(min: 1, max: 5)]
    private int $rating = 5;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\Length(min: 10, max: 1000)]
    private string $comment;

    #[ORM\Column]
    private bool $isVerified = false;

    #[ORM\Column]
    private int $helpfulCount = 0;

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

    public function getLieu(): ?LieuMedical
    {
        return $this->lieu;
    }

    public function setLieu(?LieuMedical $lieu): self
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    public function getAuthorEmail(): string
    {
        return $this->authorEmail;
    }

    public function setAuthorEmail(string $authorEmail): self
    {
        $this->authorEmail = $authorEmail;
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

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getHelpfulCount(): int
    {
        return $this->helpfulCount;
    }

    public function incrementHelpfulCount(): self
    {
        $this->helpfulCount++;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getStars(): array
    {
        return array_fill(0, 5, false);
    }

    public function getRatingStars(): string
    {
        return str_repeat('★', $this->rating) . str_repeat('☆', 5 - $this->rating);
    }
}
