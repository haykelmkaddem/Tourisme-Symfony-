<?php

namespace App\Entity;

use App\Repository\MaisonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=MaisonRepository::class)
 */
class Maison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * Groups({"groups", "maison"})
     */
    private $id;

    /**
     * @Assert\Positive
     * @ORM\Column(type="float")
     * Groups({"groups", "maison"})
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"groups", "maison"})
     */
    private $nsm;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"groups", "maison"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"groups", "maison"})
     */
    private $check_in;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"groups", "maison"})
     */
    private $check_out;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"groups", "maison"})
     */
    private $piscine;

    /**
     * @Assert\Positive
     * @ORM\Column(type="integer")
     * Groups({"groups", "maison"})
     */
    private $Bedrooms;

    /**
     * @Assert\Positive
     * @ORM\Column(type="integer")
     * Groups({"groups", "maison"})
     */
    private $bathrooms;

    /**
     * @Assert\Positive
     * @ORM\Column(type="integer")
     * Groups({"groups", "maison"})
     */
    private $maxppl;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"groups", "maison"})
     */
    private $smoke;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"groups", "maison"})
     */
    private $pet;

    /**
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=255 , nullable=true)
     * @Assert\File(maxSize="1024k", mimeTypes={"image/jpeg", "image/jpg", "image/png", "image/GIF"})
     * Groups({"groups", "maison"})
     */
    private $image1;

    /**
     * @ORM\Column(type="text")
     * Groups({"groups", "maison"})
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=TPmaison::class, inversedBy="maisons")
     * @ORM\JoinColumn(nullable=false)
     * Groups({"groups", "maison"})
     */
    private $TPmaison;

    /**
     * @ORM\ManyToOne(targetEntity=LieuMaison::class, inversedBy="maisons")
     * @ORM\JoinColumn(nullable=false)
     * Groups({"groups", "maison"})
     */
    private $LieuMaison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     * Groups({"groups", "maison"})
     */
    private $dateAjout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $phone;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="maisons")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNsm(): ?string
    {
        return $this->nsm;
    }

    public function setNsm(string $nsm): self
    {
        $this->nsm = $nsm;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCheckIn(): ?string
    {
        return $this->check_in;
    }

    public function setCheckIn(string $check_in): self
    {
        $this->check_in = $check_in;

        return $this;
    }

    public function getCheckOut(): ?string
    {
        return $this->check_out;
    }

    public function setCheckOut(string $check_out): self
    {
        $this->check_out = $check_out;

        return $this;
    }

    public function getPiscine(): ?string
    {
        return $this->piscine;
    }

    public function setPiscine(string $piscine): self
    {
        $this->piscine = $piscine;

        return $this;
    }

    public function getBedrooms(): ?int
    {
        return $this->Bedrooms;
    }

    public function setBedrooms(int $Bedrooms): self
    {
        $this->Bedrooms = $Bedrooms;

        return $this;
    }

    public function getBathrooms(): ?int
    {
        return $this->bathrooms;
    }

    public function setBathrooms(int $bathrooms): self
    {
        $this->bathrooms = $bathrooms;

        return $this;
    }

    public function getMaxppl(): ?int
    {
        return $this->maxppl;
    }

    public function setMaxppl(int $maxppl): self
    {
        $this->maxppl = $maxppl;

        return $this;
    }

    public function getSmoke(): ?string
    {
        return $this->smoke;
    }

    public function setSmoke(string $smoke): self
    {
        $this->smoke = $smoke;

        return $this;
    }

    public function getPet(): ?string
    {
        return $this->pet;
    }

    public function setPet(string $pet): self
    {
        $this->pet = $pet;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTPmaison(): ?TPmaison
    {
        return $this->TPmaison;
    }

    public function setTPmaison(?TPmaison $TPmaison): self
    {
        $this->TPmaison = $TPmaison;

        return $this;
    }

    public function getLieuMaison(): ?LieuMaison
    {
        return $this->LieuMaison;
    }

    public function setLieuMaison(?LieuMaison $LieuMaison): self
    {
        $this->LieuMaison = $LieuMaison;

        return $this;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Maison
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getPhone(): ?float
    {
        return $this->phone;
    }

    public function setPhone(float $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): self
    {
        $this->user = $user;

        return $this;
    }

}
