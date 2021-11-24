<?php

namespace App\Entity;

use App\Repository\EvenNonApprouveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints as CaptchaAssert;

/**
 * @ORM\Entity(repositoryClass=EvenNonApprouveRepository::class)
 */
class EvenNonApprouve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageFilename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreEven;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionEven;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     */
    private $dateAjout;


    /**
     * @ORM\ManyToOne(targetEntity=CategorieEven::class, inversedBy="EvenNonApprouves")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CategorieEven;

    /**
     * @ORM\ManyToOne(targetEntity=LieuEven::class, inversedBy="EvenNonApprouves")
     * @ORM\JoinColumn(nullable=false)
     */
    private $LieuEven;

    /**
     * @ORM\ManyToMany(targetEntity=Artiste::class, inversedBy="evenNonApprouves")
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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idClient;




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

    public function setImageFilename(?string $imageFilename): self
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

    public function setDescriptionEven(?string $descriptionEven): self
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


    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return EvenNonApprouve
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


    public function getHeureFinEven(): ?\DateTimeInterface
    {
        return $this->heureFinEven;
    }

    public function setHeureFinEven(?\DateTimeInterface $heureFinEven): self
    {
        $this->heureFinEven = $heureFinEven;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }
}
