<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
class Equipement
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $nom;

    #[ORM\Column(type: "string", length: 255)]
    private string $description;

    #[ORM\Column(type: "string")]
    private string $etat;

    #[ORM\Column(type: "string")]
    private string $typeEquipement;

    #[ORM\Column(type: "string", length: 255)]
    private string $imageUrl;

    #[ORM\Column(type: "integer")]
    private int $quantite;

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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($value)
    {
        $this->etat = $value;
    }

    public function getTypeEquipement()
    {
        return $this->typeEquipement;
    }

    public function setTypeEquipement($value)
    {
        $this->typeEquipement = $value;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function setImageUrl($value)
    {
        $this->imageUrl = $value;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($value)
    {
        $this->quantite = $value;
    }
}
