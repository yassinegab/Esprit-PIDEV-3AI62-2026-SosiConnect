<?php

namespace App\Entity;

use App\Repository\EmotionAnalysisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmotionAnalysisRepository::class)]
#[ORM\Table(name: 'emotion_analysis')]
class EmotionAnalysis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(targetEntity: Message::class, inversedBy: 'emotionAnalysis')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Message $message = null;

    #[ORM\Column(length: 50)]
    private ?string $mood = null;

    #[ORM\Column]
    private ?int $stressScore = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $keywords = null;

    #[ORM\Column(type: 'float')]
    private ?float $sentiment = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $analyzedAt = null;

    public function __construct()
    {
        $this->analyzedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function setMessage(Message $message): static
    {
        $this->message = $message;
        return $this;
    }

    public function getMood(): ?string
    {
        return $this->mood;
    }

    public function setMood(string $mood): static
    {
        $this->mood = $mood;
        return $this;
    }

    public function getStressScore(): ?int
    {
        return $this->stressScore;
    }

    public function setStressScore(int $stressScore): static
    {
        $this->stressScore = $stressScore;
        return $this;
    }

    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    public function setKeywords(?array $keywords): static
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getSentiment(): ?float
    {
        return $this->sentiment;
    }

    public function setSentiment(float $sentiment): static
    {
        $this->sentiment = $sentiment;
        return $this;
    }

    public function getAnalyzedAt(): ?\DateTime
    {
        return $this->analyzedAt;
    }

    public function setAnalyzedAt(\DateTime $analyzedAt): static
    {
        $this->analyzedAt = $analyzedAt;
        return $this;
    }
}
