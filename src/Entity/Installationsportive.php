<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Entrainment;

#[ORM\Entity]
class Installationsportive
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $nom;

    #[ORM\Column(type: "string")]
    private string $typeInstallation;

    #[ORM\Column(type: "string", length: 255)]
    private string $adresse;

    #[ORM\Column(type: "integer")]
    private int $capacite;

    #[ORM\Column(type: "boolean")]
    private bool $isDisponible;

    #[ORM\Column(type: "string", length: 255)]
    private string $image_url;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getTypeInstallation()
    {
        return $this->typeInstallation;
    }

    public function setTypeInstallation($value)
    {
        $this->typeInstallation = $value;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($value)
    {
        $this->adresse = $value;
    }

    public function getCapacite()
    {
        return $this->capacite;
    }

    public function setCapacite($value)
    {
        $this->capacite = $value;
    }

    public function getIsDisponible()
    {
        return $this->isDisponible;
    }

    public function setIsDisponible($value)
    {
        $this->isDisponible = $value;
    }

    public function getImage_url()
    {
        return $this->image_url;
    }

    public function setImage_url($value)
    {
        $this->image_url = $value;
    }

    #[ORM\OneToMany(mappedBy: "installationSportive_id", targetEntity: Entrainment::class)]
    private Collection $entrainments;

        public function getEntrainments(): Collection
        {
            return $this->entrainments;
        }
    
        public function addEntrainment(Entrainment $entrainment): self
        {
            if (!$this->entrainments->contains($entrainment)) {
                $this->entrainments[] = $entrainment;
                $entrainment->setInstallationSportive_id($this);
            }
    
            return $this;
        }
    
        public function removeEntrainment(Entrainment $entrainment): self
        {
            if ($this->entrainments->removeElement($entrainment)) {
                // set the owning side to null (unless already changed)
                if ($entrainment->getInstallationSportive_id() === $this) {
                    $entrainment->setInstallationSportive_id(null);
                }
            }
    
            return $this;
        }
}
