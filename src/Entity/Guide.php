<?php

namespace App\Entity;

use App\Repository\GuideRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GuideRepository::class)
 */
class Guide
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="guides")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;


    /**
     * @ORM\Column(type="bigint")
     */
    private $cin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgCinFront;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgCinBack;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cvFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $verifPhoto;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->idUser;
    }

    public function setIdUser(?Utilisateur $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getImgCinFront(): ?string
    {
        return $this->imgCinFront;
    }

    public function setImgCinFront(string $imgCinFront): self
    {
        $this->imgCinFront = $imgCinFront;

        return $this;
    }

    public function getImgCinBack(): ?string
    {
        return $this->imgCinBack;
    }

    public function setImgCinBack(string $imgCinBack): self
    {
        $this->imgCinBack = $imgCinBack;

        return $this;
    }

    public function getCvFile(): ?string
    {
        return $this->cvFile;
    }

    public function setCvFile(string $cvFile): self
    {
        $this->cvFile = $cvFile;

        return $this;
    }

    public function getVerifPhoto(): ?string
    {
        return $this->verifPhoto;
    }

    public function setVerifPhoto(string $verifPhoto): self
    {
        $this->verifPhoto = $verifPhoto;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
    public function __toString(): string
    {
        return $this->idUser;
    }
}
