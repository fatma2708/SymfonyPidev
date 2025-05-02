<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\DossierMedicalRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DossierMedicalRepository::class)]
#[ORM\Table(name: 'dossier_medical')]
class DossierMedical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Assert\Type(type: \DateTimeInterface::class, message: "La date du dernier checkup doit être une date valide.")]
    #[Assert\LessThanOrEqual("today", message: "La date du dernier checkup ne peut pas être dans le futur.")]
    private ?\DateTimeInterface $dernierCheckup = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(
        max: 500,
        maxMessage: 'Les allergies ne peuvent pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ ,;\']*$/',
        message: 'Les allergies ne doivent contenir que des lettres, des virgules ou des points-virgules.'
    )]
    private ?string $allergies = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(
        min: 10,
        max: 1000,
        minMessage: 'La description doit faire au moins {{ limit }} caractères.',
        maxMessage: 'La description ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $description = null;

    #[ORM\Column(type: 'string', nullable: true)]
    #[Assert\Choice(
        choices: ['Bon', 'Moyen', 'Critique'],
        message: "L'état de l'athlète doit être 'Bon', 'Moyen' ou 'Critique'."
    )]
    private ?string $etatAthlete = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(
        max: 500,
        maxMessage: 'Les vaccinations ne peuvent pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ ,;\']*$/',
        message: 'Les vaccinations ne doivent contenir que des lettres, des virgules ou des points-virgules.'
    )]
    private ?string $vaccinations = null;

    #[ORM\ManyToOne(targetEntity: Athlete::class, inversedBy: 'dossierMedicals')]
    #[ORM\JoinColumn(name: 'athlete_id', referencedColumnName: 'id')]
    #[Assert\NotNull(message: 'Un dossier médical doit être associé à un athlète.')]
    private ?Athlete $athlete = null;

    #[ORM\OneToMany(targetEntity: Blessure::class, mappedBy: 'dossierMedicals')]
    private Collection $blessures;

    public function __construct()
    {
        $this->blessures = new ArrayCollection();
    }

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDernierCheckup(): ?\DateTimeInterface
    {
        return $this->dernierCheckup;
    }

    public function setDernierCheckup(?\DateTimeInterface $dernierCheckup): self
    {
        $this->dernierCheckup = $dernierCheckup;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->allergies;
    }

    public function setAllergies(?string $allergies): self
    {
        $this->allergies = $allergies;

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

    public function getEtatAthlete(): ?string
    {
        return $this->etatAthlete;
    }

    public function setEtatAthlete(?string $etatAthlete): self
    {
        $this->etatAthlete = $etatAthlete;

        return $this;
    }

    public function getVaccinations(): ?string
    {
        return $this->vaccinations;
    }

    public function setVaccinations(?string $vaccinations): self
    {
        $this->vaccinations = $vaccinations;

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

    /**
     * @return Collection<int, Blessure>
     */
    public function getBlessures(): Collection
    {
        return $this->blessures;
    }

    public function addBlessure(Blessure $blessure): self
    {
        if (!$this->blessures->contains($blessure)) {
            $this->blessures[] = $blessure;
            $blessure->setDossierMedicals($this);
        }

        return $this;
    }

    public function removeBlessure(Blessure $blessure): self
    {
        if ($this->blessures->removeElement($blessure)) {
            // Set the owning side to null (unless already changed)
            if ($blessure->getDossierMedicals() === $this) {
                $blessure->setDossierMedicals(null);
            }
        }

        return $this;
    }
}
