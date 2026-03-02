<?php

namespace App\Entity;

use App\Enum\UserRole;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\DossierMedical;
use App\Entity\UserWellBeingData;
use App\Entity\ChatbotMessage;
use App\Entity\Journal;
use App\Entity\Cycle;
use App\Entity\Event;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide")]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(type: 'string', length: 20, enumType: UserRole::class)]
    private UserRole $userRole;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le prénom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le prénom ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Regex(
        pattern: "/^[0-9+\s-]*$/",
        message: "Le numéro de téléphone n'est pas valide"
    )]
    private ?string $telephone = null;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $created_at = null;

    // ================= INFOS PHYSIQUES =================
    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $age = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $poids = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $taille = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $sexe = null;

    #[ORM\Column(type: 'boolean')]
    private bool $handicap = false;

    // ================= SPÉCIALITÉ (pour les médecins) =================
    /**
     * Exemples : "Cardiologie", "Endocrinologie-Diabétologie", "Neurologie", etc.
     * Null pour les patients et admins.
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $specialite = null;

    // ================= RELATION DOSSIERS MEDICAUX =================
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: DossierMedical::class, orphanRemoval: true)]
    private Collection $dossiersMedicaux;

    // ================= WELLBEING RELATIONS =================
    /**
     * @var Collection<int, UserWellBeingData>
     */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: UserWellBeingData::class)]
    private Collection $userWellBeingData;

    /**
     * @var Collection<int, ChatbotMessage>
     */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: ChatbotMessage::class, cascade: ['persist', 'remove'])]
    private Collection $chatbotMessages;

    /**
     * @var Collection<int, Journal>
     */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Journal::class, cascade: ['persist', 'remove'])]
    private Collection $journals;
    /**
     * @var Collection<int, Cycle>
     */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Cycle::class, cascade: ['persist','remove'])]
    private Collection $cycles;
    /**
     * @var Collection<int, Event>
     */
    #[ORM\ManyToMany(targetEntity: Event::class, mappedBy: 'attendees')]
    private Collection $events;

    // ================= CONSTRUCTEUR =================
    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->roles = [];
        $this->dossiersMedicaux = new ArrayCollection();
        $this->userWellBeingData = new ArrayCollection();
        $this->chatbotMessages = new ArrayCollection();
        $this->journals = new ArrayCollection();
        $this->cycles = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->setUserRole(UserRole::PATIENT);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    // ================= RÔLES =================
    public function getRoles(): array
    {
        return array_unique($this->roles);
    }

    public function getUserRole(): UserRole
    {
        return $this->userRole;
    }

    public function setUserRole(UserRole $userRole): self
    {
        $this->userRole = $userRole;

        $this->roles = match ($userRole) {
            UserRole::PATIENT => ['ROLE_PATIENT'],
            UserRole::MEDECIN => ['ROLE_MEDECIN'],
            UserRole::ADMIN   => ['ROLE_ADMIN'],
        };

        return $this;
    }

    // ================= PASSWORD =================
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void {}

    // ================= NOM / PRENOM / TELEPHONE =================
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->created_at;
    }

    public function getFullName(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function isPacient(): bool
    {
        return in_array('ROLE_PATIENT', $this->roles);
    }

    public function isMedecin(): bool
    {
        return in_array('ROLE_MEDECIN', $this->roles);
    }

    public function getRoleLabel(): string
    {
        if ($this->isMedecin()) {
            return 'Médecin';
        }
        if ($this->isPacient()) {
            return 'Patient';
        }
        return 'Utilisateur';
    }

    // ================= INFOS PHYSIQUES =================
    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(?float $poids): self
    {
        $this->poids = $poids;
        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(?float $taille): self
    {
        $this->taille = $taille;
        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;
        return $this;
    }

    // ================= HANDICAP =================
    public function isHandicap(): bool
    {
        return $this->handicap;
    }

    public function setHandicap(bool $handicap): self
    {
        $this->handicap = $handicap;
        return $this;
    }

    // ================= SPÉCIALITÉ =================

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    /**
     * Définit la spécialité médicale du médecin.
     * Exemples de valeurs : "Cardiologie", "Endocrinologie-Diabétologie",
     * "Neurologie", "Pédiatrie", "Chirurgie orthopédique", etc.
     */
    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;
        return $this;
    }

    // ================= DOSSIERS MEDICAUX =================
    public function getDossiersMedicaux(): Collection
    {
        return $this->dossiersMedicaux;
    }

    public function addDossierMedical(DossierMedical $dossier): self
    {
        if (!$this->dossiersMedicaux->contains($dossier)) {
            $this->dossiersMedicaux->add($dossier);
            $dossier->setUser($this);
        }
        return $this;
    }

    public function removeDossierMedical(DossierMedical $dossier): self
    {
        if ($this->dossiersMedicaux->removeElement($dossier)) {
            if ($dossier->getUser() === $this) {
                $dossier->setUser(null);
            }
        }
        return $this;
    }

    // ================= WELLBEING DATA =================
    /**
     * @return Collection<int, UserWellBeingData>
     */
    public function getUserWellBeingData(): Collection
    {
        return $this->userWellBeingData;
    }

    public function addUserWellBeingData(UserWellBeingData $data): self
    {
        if (!$this->userWellBeingData->contains($data)) {
            $this->userWellBeingData->add($data);
            $data->setUser($this);
        }

        return $this;
    }

    public function removeUserWellBeingData(UserWellBeingData $data): self
    {
        if ($this->userWellBeingData->removeElement($data)) {
            // set the owning side to null (unless already changed)
            if ($data->getUser() === $this) {
                $data->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ChatbotMessage>
     */
    public function getChatbotMessages(): Collection
    {
        return $this->chatbotMessages;
    }

    public function addChatbotMessage(ChatbotMessage $chatbotMessage): self
    {
        if (!$this->chatbotMessages->contains($chatbotMessage)) {
            $this->chatbotMessages->add($chatbotMessage);
            $chatbotMessage->setUser($this);
        }

        return $this;
    }

    public function removeChatbotMessage(ChatbotMessage $chatbotMessage): self
    {
        if ($this->chatbotMessages->removeElement($chatbotMessage)) {
            // set the owning side to null (unless already changed)
            if ($chatbotMessage->getUser() === $this) {
                $chatbotMessage->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Journal>
     */
    public function getJournals(): Collection
    {
        return $this->journals;
    }

    public function addJournal(Journal $journal): self
    {
        if (!$this->journals->contains($journal)) {
            $this->journals->add($journal);
            $journal->setUser($this);
        }

        return $this;
    }

    public function removeJournal(Journal $journal): self
    {
        if ($this->journals->removeElement($journal)) {
            // set the owning side to null (unless already changed)
            if ($journal->getUser() === $this) {
                $journal->setUser(null);
            }
        }

        return $this;
    }
    /**
     * @return Collection<int, Cycle>
     */
    public function getCycles(): Collection
    {
        return $this->cycles;
    }
    public function addCycle(Cycle $cycle): self
    {
        if (!$this->cycles->contains($cycle)) {
            $this->cycles->add($cycle);
            $cycle->setUser($this);
        }
        return $this;
    }
    public function removeCycle(Cycle $cycle): self
    {
        if ($this->cycles->removeElement($cycle)) {
            if ($cycle->getUser() === $this) {
                $cycle->setUser(null);
            }
        }
        return $this;
    }
    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }
    public function addEvent(Event $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->addAttendee($this);
        }
        return $this;
    }
    public function removeEvent(Event $event): self
    {
        if ($this->events->removeElement($event)) {
            $event->removeAttendee($this);
        }
        return $this;
    }
}
