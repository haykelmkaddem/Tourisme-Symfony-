<?php

namespace App\Entity;

use App\Repository\LieuEvenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LieuEvenRepository::class)
 */
class LieuEven
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
    private $titreLieu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $addresseEven;

    /**
     * @ORM\OneToMany(targetEntity=EvenApprouve::class, mappedBy="LieuEven")
     */
    private $evenApprouves;

    /**
     * @ORM\OneToMany(targetEntity=EvenNonApprouve::class, mappedBy="LieuEven")
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

    public function getTitreLieu(): ?string
    {
        return $this->titreLieu;
    }

    public function setTitreLieu(string $titreLieu): self
    {
        $this->titreLieu = $titreLieu;

        return $this;
    }

    public function getAddresseEven(): ?string
    {
        return $this->addresseEven;
    }

    public function setAddresseEven(string $addresseEven): self
    {
        $this->addresseEven = $addresseEven;

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
            $evenApproufe->setLieuEven($this);
        }

        return $this;
    }

    public function removeEvenApproufe(EvenApprouve $evenApproufe): self
    {
        if ($this->evenApprouves->removeElement($evenApproufe)) {
            // set the owning side to null (unless already changed)
            if ($evenApproufe->getLieuEven() === $this) {
                $evenApproufe->setLieuEven(null);
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
            $evenNonApproufe->setLieuEven($this);
        }

        return $this;
    }

    public function removeEvenNonApproufe(EvenNonApprouve $evenNonApproufe): self
    {
        if ($this->EvenNonApprouves->removeElement($evenNonApproufe)) {
            // set the owning side to null (unless already changed)
            if ($evenNonApproufe->getLieuEven() === $this) {
                $evenNonApproufe->setLieuEven(null);
            }
        }

        return $this;
    }
}
