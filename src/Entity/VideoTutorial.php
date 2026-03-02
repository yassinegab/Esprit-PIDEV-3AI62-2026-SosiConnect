<?php

namespace App\Entity;

use App\Repository\VideoTutorialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: VideoTutorialRepository::class)]
#[ORM\Table(name: 'video_tutorial')]
#[Vich\Uploadable]
class VideoTutorial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private string $title;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private string $description;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private string $videoUrl;

    #[ORM\Column(length: 100)]
    private string $category = 'general';

    #[ORM\Column]
    private int $duration = 0;

    #[ORM\Column]
    private int $displayOrder = 0;

    #[ORM\Column]
    private bool $isPublished = true;

    #[ORM\Column]
    private int $viewCount = 0;

    #[ORM\Column]
    private int $likeCount = 0;

    #[ORM\Column(name: 'thumbnail_name', length: 255, nullable: true)]
    private ?string $thumbnailName = null;

    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[Vich\UploadableField(mapping: 'tutorial_thumbnail', fileNameProperty: 'thumbnailName')]
    #[Assert\Image(
        maxSize: '2M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/webp'],
        mimeTypesMessage: 'Veuillez uploader une image (JPG, PNG, WebP)'
    )]
    private ?File $thumbnailFile = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
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

    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    public function setVideoUrl(string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
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

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getDurationFormatted(): string
    {
        $minutes = floor($this->duration / 60);
        $seconds = $this->duration % 60;
        return sprintf('%d:%02d', $minutes, $seconds);
    }

    public function getDisplayOrder(): int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;
        return $this;
    }

    public function isPublished(): bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;
        return $this;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function incrementViewCount(): self
    {
        $this->viewCount++;
        return $this;
    }

    public function getLikeCount(): int
    {
        return $this->likeCount;
    }

    public function incrementLikeCount(): self
    {
        $this->likeCount++;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getThumbnailFile(): ?File
    {
        return $this->thumbnailFile;
    }

    public function setThumbnailFile(?File $thumbnailFile = null): self
    {
        $this->thumbnailFile = $thumbnailFile;
        if (null !== $thumbnailFile) {
            $this->updatedAt = new \DateTime();
        }
        return $this;
    }

    public function getThumbnailName(): ?string
    {
        return $this->thumbnailName;
    }

    public function setThumbnailName(?string $thumbnailName): self
    {
        $this->thumbnailName = $thumbnailName;
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

    public function getEmbedUrl(): string
    {
        if (strpos($this->videoUrl, 'youtube.com') !== false) {
            preg_match('/v=([^&]+)/', $this->videoUrl, $matches);
            return $matches ? 'https://www.youtube.com/embed/' . $matches[1] : $this->videoUrl;
        }
        if (strpos($this->videoUrl, 'youtu.be') !== false) {
            $id = basename(parse_url($this->videoUrl, PHP_URL_PATH));
            return 'https://www.youtube.com/embed/' . $id;
        }
        return $this->videoUrl;
    }

    public function getThumbnailUrl(): string
    {
        if ($this->thumbnailName) {
            return '/uploads/tutorials/' . $this->thumbnailName;
        }

        if (strpos($this->videoUrl, 'youtube.com') !== false || strpos($this->videoUrl, 'youtu.be') !== false) {
            preg_match('/v=([^&]+)/', $this->videoUrl, $matches);
            $id = $matches ? $matches[1] : basename(parse_url($this->videoUrl, PHP_URL_PATH));
            return 'https://img.youtube.com/vi/' . $id . '/maxresdefault.jpg';
        }

        return '/images/video-placeholder.jpg';
    }
}
