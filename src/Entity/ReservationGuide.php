<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationGuide
 *
 * @ORM\Table(name="reservation_guide", indexes={@ORM\Index(name="IDX_89E117921E65F2C9", columns={"guideTouristique"}), @ORM\Index(name="IDX_89E117928D93D649", columns={"user"})})
 * @ORM\Entity
 */
class ReservationGuide
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="guideTouristique", type="integer", nullable=true)
     */
    private $guidetouristique;

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
    public function getGuidetouristique(): ?int
    {
        return $this->guidetouristique;
    }

    /**
     * @param int|null $guidetouristique
     */
    public function setGuidetouristique(?int $guidetouristique): void
    {
        $this->guidetouristique = $guidetouristique;
    }

}
