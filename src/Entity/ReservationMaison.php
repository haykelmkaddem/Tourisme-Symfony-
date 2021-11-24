<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationMaison
 *
 * @ORM\Table(name="reservation_maison", indexes={@ORM\Index(name="IDX_B1FDFFF6627833DB", columns={"maisonalouer"}), @ORM\Index(name="IDX_B1FDFFF669E399D6", columns={"proprietaire"}), @ORM\Index(name="IDX_B1FDFFF68D93D649", columns={"user"})})
 * @ORM\Entity
 */
class ReservationMaison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user", type="integer", nullable=true)
     */
    private $user;

    /**
     * @var int|null
     *
     * @ORM\Column(name="proprietaire", type="integer", nullable=true)
     */
    private $proprietaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maisonalouer", type="integer", nullable=true)
     */
    private $maisonalouer;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getUser(): ?int
    {
        return $this->user;
    }

    /**
     * @param int|null $user
     */
    public function setUser(?int $user): void
    {
        $this->user = $user;
    }

    /**
     * @return int|null
     */
    public function getProprietaire(): ?int
    {
        return $this->proprietaire;
    }

    /**
     * @param int|null $proprietaire
     */
    public function setProprietaire(?int $proprietaire): void
    {
        $this->proprietaire = $proprietaire;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime|null $dateDebut
     */
    public function setDateDebut(?\DateTime $dateDebut): void
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime|null $dateFin
     */
    public function setDateFin(?\DateTime $dateFin): void
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return int|null
     */
    public function getMaisonalouer(): ?int
    {
        return $this->maisonalouer;
    }

    /**
     * @param int|null $maisonalouer
     */
    public function setMaisonalouer(?int $maisonalouer): void
    {
        $this->maisonalouer = $maisonalouer;
    }


}
