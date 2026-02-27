<?php

namespace App\Entity;

use App\Repository\CycleRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\User;
use App\Entity\Symptome;

#[ORM\Entity(repositoryClass: CycleRepository::class)]

class Cycle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idCycle = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'cycles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    /**
     * @var Collection<int, Symptome>
     */
    #[ORM\OneToMany(mappedBy: 'cycle', targetEntity: Symptome::class, cascade: ['persist','remove'], orphanRemoval: true)]
    private Collection $symptomes;

    public function __construct()
    {
        $this->symptomes = new ArrayCollection();
    }

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de début est obligatoire")]
    private ?\DateTime $dateDebutM = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire")]
    private ?\DateTime $dateFinM = null;

    #[Assert\Callback]
    public function validateDates(ExecutionContextInterface $context): void
    {
        if ($this->dateDebutM && $this->dateFinM) {
            if ($this->dateDebutM >= $this->dateFinM) {
                $context->buildViolation(
                    'La date de début doit être strictement antérieure à la date de fin'
                )
                ->atPath('dateDebutM')
                ->addViolation();
            }
        }
    }

  
public function getIdCycle(): ?int
{
    return $this->idCycle;
}



    public function getDateDebutM(): ?\DateTime
    {
        return $this->dateDebutM;
    }

    public function setDateDebutM(\DateTime $dateDebutM): static
    {
        $this->dateDebutM = $dateDebutM;

        return $this;
    }

    public function getDateFinM(): ?\DateTime
    {
        return $this->dateFinM;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Symptome>
     */
    public function getSymptomes(): Collection
    {
        return $this->symptomes;
    }

    public function addSymptome(Symptome $symptome): static
    {
        if (!$this->symptomes->contains($symptome)) {
            $this->symptomes->add($symptome);
            $symptome->setCycle($this);
        }

        return $this;
    }

    public function removeSymptome(Symptome $symptome): static
    {
        if ($this->symptomes->removeElement($symptome)) {
            if ($symptome->getCycle() === $this) {
                $symptome->setCycle(null);
            }
        }

        return $this;
    }

    public function setDateFinM(\DateTime $dateFinM): static
    {
        $this->dateFinM = $dateFinM;

        return $this;
    }

    public function __toString(): string
    {
        // when used in form choices, return the start date as string
        return $this->dateDebutM ? $this->dateDebutM->format('Y-m-d') : '';
    }
}
