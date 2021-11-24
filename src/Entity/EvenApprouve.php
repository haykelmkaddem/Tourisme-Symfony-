<?php

namespace App\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\EvenApprouveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EvenApprouveRepository::class)
 *
 */
class EvenApprouve
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
    private $titreEven;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionEven;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieEven::class, inversedBy="evenApprouves")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CategorieEven;

    /**
     * @ORM\ManyToOne(targetEntity=LieuEven::class, inversedBy="evenApprouves")
     * @ORM\JoinColumn(nullable=false)
     */
    private $LieuEven;

    /**
     * @ORM\ManyToMany(targetEntity=Artiste::class, inversedBy="evenApprouves")
     */
    private $Artiste;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebutEven;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFinEven;

    /**
     * @ORM\Column(type="time")
     */
    private $heureDebutEven;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heureFinEven;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageFilename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     */
    private $dateAjout;



    public function __construct()
    {
        $this->Artiste = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
    }

    public function setImageFilename(string $imageFilename): self
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }


    public function getTitreEven(): ?string
    {
        return $this->titreEven;
    }

    public function setTitreEven(string $titreEven): self
    {
        $this->titreEven = $titreEven;

        return $this;
    }

    public function getDescriptionEven(): ?string
    {
        return $this->descriptionEven;
    }

    public function setDescriptionEven(string $descriptionEven): self
    {
        $this->descriptionEven = $descriptionEven;

        return $this;
    }

    public function getCategorieEven(): ?CategorieEven
    {
        return $this->CategorieEven;
    }

    public function setCategorieEven(?CategorieEven $CategorieEven): self
    {
        $this->CategorieEven = $CategorieEven;

        return $this;
    }



    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return EvenApprouve
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }


    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }



    public function getLieuEven(): ?LieuEven
    {
        return $this->LieuEven;
    }

    public function setLieuEven(?LieuEven $LieuEven): self
    {
        $this->LieuEven = $LieuEven;

        return $this;
    }

    /**
     * @return Collection|Artiste[]
     */
    public function getArtiste(): Collection
    {
        return $this->Artiste;
    }


    public function addArtiste(Artiste $artiste): self
    {
        if (!$this->Artiste->contains($artiste)) {
            $this->Artiste[] = $artiste;
        }

        return $this;
    }

    public function removeArtiste(Artiste $artiste): self
    {
        $this->Artiste->removeElement($artiste);

        return $this;
    }

    public function getDateDebutEven(): ?\DateTimeInterface
    {
        return $this->dateDebutEven;
    }

    public function setDateDebutEven(\DateTimeInterface $dateDebutEven): self
    {
        $this->dateDebutEven = $dateDebutEven;

        return $this;
    }

    public function getDateFinEven(): ?\DateTimeInterface
    {
        return $this->dateFinEven;
    }

    public function setDateFinEven(?\DateTimeInterface $dateFinEven): self
    {
        $this->dateFinEven = $dateFinEven;

        return $this;
    }

    public function getHeureDebutEven(): ?\DateTimeInterface
    {
        return $this->heureDebutEven;
    }

    public function setHeureDebutEven(\DateTimeInterface $heureDebutEven): self
    {
        $this->heureDebutEven = $heureDebutEven;

        return $this;
    }

    public function getHeureFinEven(): ?\DateTimeInterface
    {
        return $this->heureFinEven;
    }

    public function setHeureFinEven(?\DateTimeInterface $heureFinEven): self
    {
        $this->heureFinEven = $heureFinEven;

        return $this;
    }
}
