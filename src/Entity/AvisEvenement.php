<?php

namespace App\Entity;

use App\Repository\AvisEvenementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisEvenementRepository::class)
 */
class AvisEvenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=EvenApprouve::class)
     */
    private $id_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class)
     */
    private $id_utilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvenement(): ?EvenApprouve
    {
        return $this->id_evenement;
    }

    public function setIdEvenement(?EvenApprouve $id_evenement): self
    {
        $this->id_evenement = $id_evenement;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $id_utilisateur): self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
