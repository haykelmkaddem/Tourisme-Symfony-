<?php

namespace App\Entity;

use App\Repository\CategorieArtRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieArtRepository::class)
 */
class CategorieArt
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
    private $titreCatArt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionCatArt;

    /**
     * @ORM\OneToMany(targetEntity=Artiste::class, mappedBy="CategorieArt")
     */
    private $artistes;

    public function __construct()
    {
        $this->artistes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreCatArt(): ?string
    {
        return $this->titreCatArt;
    }

    public function setTitreCatArt(string $titreCatArt): self
    {
        $this->titreCatArt = $titreCatArt;

        return $this;
    }

    public function getDescriptionCatArt(): ?string
    {
        return $this->descriptionCatArt;
    }

    public function setDescriptionCatArt(?string $descriptionCatArt): self
    {
        $this->descriptionCatArt = $descriptionCatArt;

        return $this;
    }

    /**
     * @return Collection|Artiste[]
     */
    public function getArtistes(): Collection
    {
        return $this->artistes;
    }

    public function addArtiste(Artiste $artiste): self
    {
        if (!$this->artistes->contains($artiste)) {
            $this->artistes[] = $artiste;
            $artiste->setCategorieArt($this);
        }

        return $this;
    }

    public function removeArtiste(Artiste $artiste): self
    {
        if ($this->artistes->removeElement($artiste)) {
            // set the owning side to null (unless already changed)
            if ($artiste->getCategorieArt() === $this) {
                $artiste->setCategorieArt(null);
            }
        }

        return $this;
    }
}
