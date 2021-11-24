<?php

namespace App\Entity;

use App\Repository\TPmaisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TPmaisonRepository::class)
 */
class TPmaison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Maison::class, mappedBy="TPmaison")
     */
    private $maisons;

    public function __construct()
    {
        $this->maisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Maison[]
     */
    public function getMaisons(): Collection
    {
        return $this->maisons;
    }

    public function addMaison(Maison $maison): self
    {
        if (!$this->maisons->contains($maison)) {
            $this->maisons[] = $maison;
            $maison->setTPmaison($this);
        }

        return $this;
    }

    public function removeMaison(Maison $maison): self
    {
        if ($this->maisons->removeElement($maison)) {
            // set the owning side to null (unless already changed)
            if ($maison->getTPmaison() === $this) {
                $maison->setTPmaison(null);
            }
        }

        return $this;
    }
}
