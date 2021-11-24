<?php

namespace App\Entity;

use App\Repository\DisponibiliteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DisponibiliteRepository::class)
 */
class Disponibilite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="time")
     */
    private $de;

    /**
     * @ORM\Column(type="time")
     */
    private $a;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="idDisponibilite")
     */
    private $utilisateur;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDe(): ?\DateTimeInterface
    {
        return $this->de;
    }

    public function setDe(\DateTimeInterface $de): self
    {
        $this->de = $de;

        return $this;
    }

    public function getA(): ?\DateTimeInterface
    {
        return $this->a;
    }

    public function setA(\DateTimeInterface $a): self
    {
        $this->a = $a;

        return $this;
    }

    public function getUtilisateur (): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur (?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
