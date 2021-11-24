<?php

namespace App\Entity;

use App\Repository\ArtisteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtisteRepository::class)
 */
class Artiste
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
    private $nomArtiste;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionArtiste;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieArt::class, inversedBy="artistes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CategorieArt;

    /**
     * @ORM\ManyToMany(targetEntity=EvenApprouve::class, mappedBy="Artiste")
     */
    private $evenApprouves;

    /**
     * @ORM\ManyToMany(targetEntity=EvenNonApprouve::class, mappedBy="Artiste")
     */
    private $evenNonApprouves;

    public function __construct()
    {
        $this->evenApprouves = new ArrayCollection();
        $this->evenNonApprouves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomArtiste(): ?string
    {
        return $this->nomArtiste;
    }

    public function setNomArtiste(string $nomArtiste): self
    {
        $this->nomArtiste = $nomArtiste;

        return $this;
    }

    public function getDescriptionArtiste(): ?string
    {
        return $this->descriptionArtiste;
    }

    public function setDescriptionArtiste(?string $descriptionArtiste): self
    {
        $this->descriptionArtiste = $descriptionArtiste;

        return $this;
    }

    public function getCategorieArt(): ?CategorieArt
    {
        return $this->CategorieArt;
    }

    public function setCategorieArt(?CategorieArt $CategorieArt): self
    {
        $this->CategorieArt = $CategorieArt;

        return $this;
    }

    /**
     * @return Collection|EvenApprouve[]
     */
    public function getEvenApprouves(): Collection
    {
        return $this->evenApprouves;
    }

    public function addEvenApproufe(EvenApprouve $evenApproufe): self
    {
        if (!$this->evenApprouves->contains($evenApproufe)) {
            $this->evenApprouves[] = $evenApproufe;
            $evenApproufe->addArtiste($this);
        }

        return $this;
    }

    public function removeEvenApproufe(EvenApprouve $evenApproufe): self
    {
        if ($this->evenApprouves->removeElement($evenApproufe)) {
            $evenApproufe->removeArtiste($this);
        }

        return $this;
    }

    /**
     * @return Collection|EvenNonApprouve[]
     */
    public function getEvenNonApprouves(): Collection
    {
        return $this->evenNonApprouves;
    }

    public function addEvenNonApproufe(EvenNonApprouve $evenNonApproufe): self
    {
        if (!$this->evenNonApprouves->contains($evenNonApproufe)) {
            $this->evenNonApprouves[] = $evenNonApproufe;
            $evenNonApproufe->addArtiste($this);
        }

        return $this;
    }

    public function removeEvenNonApproufe(EvenNonApprouve $evenNonApproufe): self
    {
        if ($this->evenNonApprouves->removeElement($evenNonApproufe)) {
            $evenNonApproufe->removeArtiste($this);
        }

        return $this;
    }
}
