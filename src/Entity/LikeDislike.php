<?php

namespace App\Entity;

use App\Repository\LikeDislikeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LikeDislikeRepository::class)
 */
class LikeDislike
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class)
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity=Maison::class)
     */
    private $maison_id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aime;

    /**
     * @ORM\ManyToOne(targetEntity=EvenApprouve::class, inversedBy="likeDislikes")
     */
    private $evenement;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="likeDislikes")
     */
    private $guide;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?Utilisateur
    {
        return $this->user_id;
    }

    public function setUserId(?Utilisateur $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getMaisonId(): ?Maison
    {
        return $this->maison_id;
    }

    public function setMaisonId(?Maison $maison_id): self
    {
        $this->maison_id = $maison_id;

        return $this;
    }

    public function getAime(): ?bool
    {
        return $this->aime;
    }

    public function setAime(?bool $aime): self
    {
        $this->aime = $aime;

        return $this;
    }

    public function getEvenApprouve (): ?EvenApprouve
    {
        return $this->evenement;
    }

    public function setEvenApprouve (?EvenApprouve $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }

    public function getGuide(): ?Utilisateur
    {
        return $this->guide;
    }

    public function setGuide(?Utilisateur $guide): self
    {
        $this->guide = $guide;

        return $this;
    }
}
