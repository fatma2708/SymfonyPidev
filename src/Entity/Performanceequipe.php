<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Equipe;
use App\Entity\Tournois;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
class Performanceequipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Equipe::class, inversedBy: "performanceequipes")]
    #[ORM\JoinColumn(name: 'equipe_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private ?Equipe $equipe = null;

    #[ORM\ManyToOne(targetEntity: Tournois::class, inversedBy: "performanceequipes")]
    #[Assert\NotBlank(message: "Veuillez saisir les victoires.")]

    #[ORM\JoinColumn(name: 'tournois_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private ?Tournois $tournois = null;

    #[ORM\Column(type: "integer",nullable: true)]
    #[Assert\NotBlank(message: "Veuillez saisir les victoires.")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "Les victoires est un champ supérieur ou égal à 0.")]

    private ?int $victoires;

    #[ORM\Column(type: "integer",nullable: true)]
    #[Assert\NotBlank(message: "Veuillez saisir les pertes.")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "Les pertes est un champ supérieur ou égal à 0.")]


    private ?int $pertes;

    #[ORM\Column(type: "integer",nullable: true)]
    #[Assert\NotBlank(message: "Veuillez saisir le rang.")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "Le rang doit être supérieur ou égal à 0.")]
    private ?int $rang;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    // Use the association property "equipe" (which maps to the "equipe_id" column in the database)
    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;
        return $this;
    }

    public function getTournois(): ?Tournois
    {
        return $this->tournois;
    }

    public function setTournois(?Tournois $tournois): self
    {
        $this->tournois = $tournois;
        return $this;
    }

    public function getVictoires(): ?int
    {
        return $this->victoires;
    }

    public function setVictoires(?int $victoires): self
    {
        $this->victoires = $victoires;
        return $this;
    }

    public function getPertes(): ?int
    {
        return $this->pertes;
    }

    public function setPertes(?int $pertes): self
    {
        $this->pertes = $pertes;
        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;
        return $this;
    }

    // Convenience method to return the ID of the associated Equipe, if needed.
    public function getEquipeId(): ?int
    {
        return $this->equipe ? $this->equipe->getId() : null;
    }

    public function getTournoisId(): ?int
    {
        return $this->tournois ? $this->tournois->getId() : null;
    }
}
