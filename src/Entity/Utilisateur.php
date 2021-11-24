<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $datenaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numtel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebook_id;

    /**
     * @ORM\OneToMany(targetEntity=Disponibilite::class, mappedBy="utilisateur")
     */
    private $idDisponibilite;

    /**
     * @ORM\OneToMany(targetEntity=SocialMedia::class, mappedBy="user")
     */
    private $socialMedia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $instagram;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkedin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descr;

    /**
     * @ORM\OneToMany(targetEntity=Maison::class, mappedBy="user")
     */
    private $maisons;

    public function __construct()
    {
        $this->idDisponibilite = new ArrayCollection();
        $this->socialMedia = new ArrayCollection();
        $this->maisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    public function __toString(){
        // to show the name of the Category in the select
        return $this->email;
        // to show the id of the Category in the select
        // return $this->id;
    }

    public function getFacebookId(): ?string
    {
        return $this->facebook_id;
    }

    public function setFacebookId(?string $facebook_id): self
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    /**
     * @return Collection|Disponibilite[]
     */
    public function getIdDisponibilite(): Collection
    {
        return $this->idDisponibilite;
    }

    public function addIdDisponibilite(Disponibilite $idDisponibilite): self
    {
        if (!$this->idDisponibilite->contains($idDisponibilite)) {
            $this->idDisponibilite[] = $idDisponibilite;
            $idDisponibilite->setUtilisateur($this);
        }

        return $this;
    }

    public function removeIdDisponibilite(Disponibilite $idDisponibilite): self
    {
        if ($this->idDisponibilite->removeElement($idDisponibilite)) {
            // set the owning side to null (unless already changed)
            if ($idDisponibilite->getUtilisateur() === $this) {
                $idDisponibilite->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SocialMedia[]
     */
    public function getSocialMedia(): Collection
    {
        return $this->socialMedia;
    }

    public function addSocialMedium(SocialMedia $socialMedium): self
    {
        if (!$this->socialMedia->contains($socialMedium)) {
            $this->socialMedia[] = $socialMedium;
            $socialMedium->setUser($this);
        }

        return $this;
    }

    public function removeSocialMedium(SocialMedia $socialMedium): self
    {
        if ($this->socialMedia->removeElement($socialMedium)) {
            // set the owning side to null (unless already changed)
            if ($socialMedium->getUser() === $this) {
                $socialMedium->setUser(null);
            }
        }

        return $this;
    }
    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(string $linkedin): self
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(string $instagram): self
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function setDescr(string $descr): self
    {
        $this->descr = $descr;

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
            $maison->setUser($this);
        }

        return $this;
    }

    public function removeMaison(Maison $maison): self
    {
        if ($this->maisons->removeElement($maison)) {
            // set the owning side to null (unless already changed)
            if ($maison->getUser() === $this) {
                $maison->setUser(null);
            }
        }

        return $this;
    }
}

