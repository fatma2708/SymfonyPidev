<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Equipe;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
class Utilisateur
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

        #[ORM\ManyToOne(targetEntity: Equipe::class, inversedBy: "utilisateurs")]
    #[ORM\JoinColumn(name: 'equipe_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Equipe $equipe_id;

    #[ORM\Column(type: "string", length: 255)]
    private string $nom;

    #[ORM\Column(type: "string", length: 255)]
    private string $prenom;

    #[ORM\Column(type: "string")]
    private string $role;

    #[ORM\Column(type: "string", length: 255)]
    private string $email;

    #[ORM\Column(type: "string", length: 255)]
    private string $mdp_hash;

    #[ORM\Column(type: "string", length: 255)]
    private string $adresse;

    #[ORM\Column(type: "string", length: 255)]
    private string $tel;

    #[ORM\Column(type: "string", length: 255)]
    private string $status;

    #[ORM\Column(type: "string", length: 255)]
    private string $image_url;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $birthday;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getEquipe_id()
    {
        return $this->equipe_id;
    }

    public function setEquipe_id($value)
    {
        $this->equipe_id = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($value)
    {
        $this->prenom = $value;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($value)
    {
        $this->role = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getMdp_hash()
    {
        return $this->mdp_hash;
    }

    public function setMdp_hash($value)
    {
        $this->mdp_hash = $value;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($value)
    {
        $this->adresse = $value;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($value)
    {
        $this->tel = $value;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value;
    }

    public function getImage_url()
    {
        return $this->image_url;
    }

    public function setImage_url($value)
    {
        $this->image_url = $value;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($value)
    {
        $this->birthday = $value;
    }

    #[ORM\OneToMany(mappedBy: "athlete_id", targetEntity: Dossiermedical::class)]
    private Collection $dossiermedicals;

    #[ORM\OneToMany(mappedBy: "coach_id", targetEntity: Equipe::class)]
    private Collection $equipes;

    #[ORM\OneToMany(mappedBy: "athlete_id", targetEntity: Performanceathlete::class)]
    private Collection $performanceathletes;
    #[ORM\ManyToMany(targetEntity: Tournois::class, mappedBy: 'favoritedBy')]
    private Collection $favoriteTournois;

    public function __construct()
    {
        $this->favoriteTournois = new ArrayCollection();
    }

    public function getFavoriteTournois(): Collection
    {
        return $this->favoriteTournois;
    }

    public function addFavoriteTournois(Tournois $tournois): self
    {
        if (!$this->favoriteTournois->contains($tournois)) {
            $this->favoriteTournois->add($tournois);
            $tournois->addFavoritedBy($this);
        }

        return $this;
    }

    public function removeFavoriteTournois(Tournois $tournois): self
    {
        if ($this->favoriteTournois->removeElement($tournois)) {
            $tournois->removeFavoritedBy($this);
        }

        return $this;
    }
}
