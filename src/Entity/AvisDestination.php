<?php

namespace App\Entity;

use App\Repository\AvisDestinationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisDestinationRepository::class)
 */
class AvisDestination
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
    private $id_utilisateur;

    /**
     * @ORM\Column(type="integer")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity=Destination::class)
     */
    private $id_destination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getIdDestination(): ?Destination
    {
        return $this->id_destination;
    }

    public function setIdDestination(?Destination $id_destination): self
    {
        $this->id_destination = $id_destination;

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
