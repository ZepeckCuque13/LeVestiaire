<?php

namespace App\Entity;

use App\Repository\MonVestiaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MonVestiaireRepository::class)]
class MonVestiaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;


    #[ORM\OneToMany(mappedBy: 'Vestiaire', targetEntity: maillot::class)]
    private Collection $Maillots;

    #[ORM\OneToOne(mappedBy: 'Vestiaire', cascade: ['persist', 'remove'])]
    private ?Member $member = null;

   

    public function __construct()
    {
        $this->Maillots = new ArrayCollection();
    }
    
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, maillot>
     */
    public function getMaillots(): Collection
    {
        return $this->Maillots;
    }

    public function addMaillot(maillot $maillot): static
    {
        if (!$this->Maillots->contains($maillot)) {
            $this->Maillots->add($maillot);
            $maillot->setVestiaire($this);
        }

        return $this;
    }

    public function removeMaillot(maillot $maillot): static
    {
        if ($this->Maillots->removeElement($maillot)) {
            // set the owning side to null (unless already changed)
            if ($maillot->getVestiaire() === $this) {
                $maillot->setVestiaire(null);
            }
        }

        return $this;
    }

    public function getNom(): ?Member
    {
        return $this->Nom;
    }

    public function setNom(Member $Nom): static
    {
        // set the owning side of the relation if necessary
        if ($Nom->getAssociation() !== $this) {
            $Nom->setAssociation($this);
        }

        $this->Nom = $Nom;

        return $this;
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(Member $member): static
    {
        // set the owning side of the relation if necessary
        if ($member->getVestiaire() !== $this) {
            $member->setVestiaire($this);
        }

        $this->member = $member;

        return $this;
    }
    
    
    
}
