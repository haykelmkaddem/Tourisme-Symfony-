<?php

namespace App\Entity;

use App\Repository\CategorieEvenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieEvenRepository::class)
 */
class CategorieEven
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
    private $titreCat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionCat;

    /**
     * @ORM\OneToMany(targetEntity=EvenApprouve::class, mappedBy="CategorieEven")
     */
    private $evenApprouves;

    /**
     * @ORM\OneToMany(targetEntity=EvenNonApprouve::class, mappedBy="CategorieEven")
     */
    private $EvenNonApprouves;

    public function __construct()
    {
        $this->evenApprouves = new ArrayCollection();
        $this->EvenNonApprouves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreCat(): ?string
    {
        return $this->titreCat;
    }

    public function setTitreCat(string $titreCat): self
    {
        $this->titreCat = $titreCat;

        return $this;
    }

    public function getDescriptionCat(): ?string
    {
        return $this->descriptionCat;
    }

    public function setDescriptionCat(?string $descriptionCat): self
    {
        $this->descriptionCat = $descriptionCat;

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
            $evenApproufe->setCategorieEven($this);
        }

        return $this;
    }

    public function removeEvenApproufe(EvenApprouve $evenApproufe): self
    {
        if ($this->evenApprouves->removeElement($evenApproufe)) {
            // set the owning side to null (unless already changed)
            if ($evenApproufe->getCategorieEven() === $this) {
                $evenApproufe->setCategorieEven(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|EvenNonApprouve[]
     */
    public function getEvenNonApprouves(): Collection
    {
        return $this->EvenNonApprouves;
    }

    public function addEvenNonApproufe(EvenNonApprouve $evenNonApproufe): self
    {
        if (!$this->EvenNonApprouves->contains($evenNonApproufe)) {
            $this->EvenNonApprouves[] = $evenNonApproufe;
            $evenNonApproufe->setCategorieEven($this);
        }

        return $this;
    }

    public function removeEvenNonApproufe(EvenNonApprouve $evenNonApproufe): self
    {
        if ($this->EvenNonApprouves->removeElement($evenNonApproufe)) {
            // set the owning side to null (unless already changed)
            if ($evenNonApproufe->getCategorieEven() === $this) {
                $evenNonApproufe->setCategorieEven(null);
            }
        }

        return $this;
    }
}
