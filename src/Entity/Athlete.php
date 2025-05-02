<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\AthleteRepository;

#[ORM\Entity(repositoryClass: AthleteRepository::class)]
#[ORM\Table(name: 'athlete')]
class Athlete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $mail = null;

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    #[ORM\OneToOne(targetEntity: DossierMedical::class, inversedBy: 'athlete')]
    #[ORM\JoinColumn(name: 'dossier_medical_id', referencedColumnName: 'id', unique: true)]
    private ?DossierMedical $dossierMedical = null;

    public function getDossierMedical(): ?DossierMedical
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(?DossierMedical $dossierMedical): self
    {
        $this->dossierMedical = $dossierMedical;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Blessure::class, mappedBy: 'athlete')]
    private Collection $blessures;

    /**
     * @return Collection<int, Blessure>
     */
    public function getBlessures(): Collection
    {
        if (!$this->blessures instanceof Collection) {
            $this->blessures = new ArrayCollection();
        }
        return $this->blessures;
    }

    public function addBlessure(Blessure $blessure): self
    {
        if (!$this->getBlessures()->contains($blessure)) {
            $this->getBlessures()->add($blessure);
        }
        return $this;
    }

    public function removeBlessure(Blessure $blessure): self
    {
        $this->getBlessures()->removeElement($blessure);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: DossierMedical::class, mappedBy: 'athlete')]
    private Collection $dossierMedicals;

    /**
     * @return Collection<int, DossierMedical>
     */
    public function getDossierMedicals(): Collection
    {
        if (!$this->dossierMedicals instanceof Collection) {
            $this->dossierMedicals = new ArrayCollection();
        }
        return $this->dossierMedicals;
    }

    public function addDossierMedical(DossierMedical $dossierMedical): self
    {
        if (!$this->getDossierMedicals()->contains($dossierMedical)) {
            $this->getDossierMedicals()->add($dossierMedical);
        }
        return $this;
    }

    public function removeDossierMedical(DossierMedical $dossierMedical): self
    {
        $this->getDossierMedicals()->removeElement($dossierMedical);
        return $this;
    }
    #[ORM\OneToMany(mappedBy: 'athlete', targetEntity: Blessure::class)]

public function __toString(): string
{
    return $this->name; // ou $this->prenom . ' ' . $this->nom
}

}
