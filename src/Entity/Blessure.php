<?php

namespace App\Entity;

use App\Repository\BlessureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


#[ORM\Entity(repositoryClass: BlessureRepository::class)]
#[ORM\Table(name: 'blessure')]
class Blessure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'datetime', nullable: false)]
    #[Assert\NotNull(message: "La date de blessure est obligatoire.")]
    
    #[Assert\LessThanOrEqual('today', message: "La date de blessure ne peut pas être dans le futur.")]
    private ?\DateTimeInterface $dateBlessure = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Assert\GreaterThan(propertyPath: "dateBlessure", message: "La date de retour doit être après la date de blessure.")]
    private ?\DateTimeInterface $dateRetour = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        min: 10,
        minMessage: "La description doit faire au moins {{ limit }} caractères."
    )]
    private ?string $description = null;

    #[ORM\Column(type: 'string', nullable: true)]
    #[Assert\NotBlank(message: "Le type de blessure est obligatoire.")]
    #[Assert\Choice(
        choices: ['entorse', 'fracture', 'déchirure', 'autre'],
        message: "Choisissez un type valide (entorse, fracture, déchirure, autre)."
    )]
    private ?string $type = null;

    #[ORM\ManyToOne(targetEntity: Athlete::class, inversedBy: 'blessures')]
    #[ORM\JoinColumn(name: 'athlete_id', referencedColumnName: 'id')]
    #[Assert\NotNull(message: "L'athlète est obligatoire.")]
    private ?Athlete $athlete = null;

    #[ORM\ManyToMany(targetEntity: DossierMedical::class, inversedBy: 'blessures')]
    #[ORM\JoinTable(
        name: 'dossier_blessure',
        joinColumns: [new ORM\JoinColumn(name: 'blessure_id', referencedColumnName: 'id')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'dossier_id', referencedColumnName: 'id')]
    )]
    private Collection $dossierMedicals;

    public function __construct()
    {
        $this->dossierMedicals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getDateBlessure(): ?\DateTimeInterface
    {
        return $this->dateBlessure;
    }

    public function setDateBlessure(?\DateTimeInterface $dateBlessure): self
    {
        $this->dateBlessure = $dateBlessure;
        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(?\DateTimeInterface $dateRetour): self
    {
        $this->dateRetour = $dateRetour;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getAthlete(): ?Athlete
    {
        return $this->athlete;
    }

    public function setAthlete(?Athlete $athlete): self
    {
        $this->athlete = $athlete;
        return $this;
    }

    public function getDossierMedicals(): Collection
    {
        return $this->dossierMedicals;
    }

    public function addDossierMedical(DossierMedical $dossierMedical): self
    {
        if (!$this->dossierMedicals->contains($dossierMedical)) {
            $this->dossierMedicals->add($dossierMedical);
        }
        return $this;
    }

    public function removeDossierMedical(DossierMedical $dossierMedical): self
    {
        $this->dossierMedicals->removeElement($dossierMedical);
        return $this;
    }
}
