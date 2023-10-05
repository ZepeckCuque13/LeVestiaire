<?php

namespace App\Entity;

use App\Repository\MaillotRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaillotRepository::class)]
class Maillot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $equipe = null;

    #[ORM\Column(length: 255)]
    private ?string $annee = null;

    #[ORM\ManyToOne(inversedBy: 'Maillots')]
    #[ORM\JoinColumn(nullable: false)]
    private ?MonVestiaire $vestiaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipe(): ?string
    {
        return $this->equipe;
    }

    public function setEquipe(string $Equipe): static
    {
        $this->equipe = $Equipe;

        return $this;
    }

    public function getAnnée(): ?string
    {
        return $this->annee;
    }

    public function setAnnée(string $Année): static
    {
        $this->annee = $Année;

        return $this;
    }

    public function getVestiaire(): ?MonVestiaire
    {
        return $this->vestiaire;
    }

    public function setVestiaire(?MonVestiaire $Vestiaire): static
    {
        $this->vestiaire = $Vestiaire;

        return $this;
    }
}
