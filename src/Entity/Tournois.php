<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Matchsportif;
use App\Entity\Performanceequipe;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
class Tournois
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255,nullable: true)]
    #[Assert\NotBlank(message: "Le nom du tournoi est obligatoire.")]
    private ?string $nom;

    #[ORM\Column(type: "string",nullable: true)]
    #[Assert\NotBlank(message: "Veuillez choisir un sport.")]

    private ?string $sport;

    #[ORM\Column(name: "dateDebut", type: "datetime",nullable: true)]
    #[Assert\GreaterThan("today", message: "La date doit être dans le futur.")]
    #[Assert\NotBlank(message: "La date du tournoi est obligatoire.")]
    #[Assert\Type(type: "datetime", message: "La date doit être une date valide.")]
    private ?\DateTimeInterface $dateDebut;

    #[ORM\Column(name: "dateFin", type: "datetime",nullable: true)]
    #[Assert\GreaterThan("today", message: "La date doit être dans le futur.")]
    #[Assert\NotBlank(message: "La date du tournoi est obligatoire.")]
    #[Assert\Type(type: "datetime", message: "La date doit être une date valide.")]
    
    
    private ?\DateTimeInterface $dateFin;

    #[ORM\Column(type: "string", length: 255,nullable: true)]
        #[Assert\NotBlank(message: "Veuillez choisir un sport.")]

    private string $adresse;

    #[ORM\OneToMany(mappedBy: "tournois", targetEntity: Performanceequipe::class)]
    private Collection $performanceequipes;

    #[ORM\OneToMany(mappedBy: "tournois", targetEntity: Matchsportif::class)]
    private Collection $matchsportifs;

    public function __construct()
    {
        $this->performanceequipes = new ArrayCollection();
        $this->matchsportifs = new ArrayCollection();
        $this->favoritedBy = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($value): self
    {
        $this->id = $value;
        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value): self
    {
        $this->nom = $value;
        return $this;
    }

    public function getSport()
    {
        return $this->sport;
    }

    public function setSport($value): self
    {
        $this->sport = $value;
        return $this;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($value): self
    {
        $this->dateDebut = $value;
        return $this;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($value): self
    {
        $this->dateFin = $value;
        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($value): self
    {
        $this->adresse = $value;
        return $this;
    }

    public function getPerformanceequipes(): Collection
    {
        return $this->performanceequipes;
    }
    
    public function addPerformanceequipe(Performanceequipe $performanceequipe): self
    {
        if (!$this->performanceequipes->contains($performanceequipe)) {
            $this->performanceequipes[] = $performanceequipe;
            $performanceequipe->setTournois($this);
        }
    
        return $this;
    }
    
    public function removePerformanceequipe(Performanceequipe $performanceequipe): self
    {
        if ($this->performanceequipes->removeElement($performanceequipe)) {
            if ($performanceequipe->getTournois() === $this) {
                $performanceequipe->setTournois(null);
            }
        }
    
        return $this;
    }

    public function getMatchsportifs(): Collection
    {
        return $this->matchsportifs;
    }
    #[ORM\ManyToMany(targetEntity: Utilisateur::class, inversedBy: 'favoriteTournois')]
    private Collection $favoritedBy;

    public function getFavoritedBy(): Collection
    {
        return $this->favoritedBy;
    }

    public function addFavoritedBy(Utilisateur $user): self
    {
        if (!$this->favoritedBy->contains($user)) {
            $this->favoritedBy->add($user);
        }

        return $this;
    }

    public function removeFavoritedBy(Utilisateur $user): self
    {
        $this->favoritedBy->removeElement($user);

        return $this;
    }
}
