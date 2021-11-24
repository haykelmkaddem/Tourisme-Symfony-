<?php

namespace App\Entity;

use App\Repository\EvenPopulariteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenPopulariteRepository::class)
 */
class EvenPopularite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $participants;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $peutEtre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $no;

    /**
     * @ORM\Column(type="integer")
     */
    private $idEven;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParticipants(): ?int
    {
        return $this->participants;
    }

    public function setParticipants(?int $participants): self
    {
        $this->participants = $participants;

        return $this;
    }

    public function getPeutEtre(): ?int
    {
        return $this->peutEtre;
    }

    public function setPeutEtre(?int $peutEtre): self
    {
        $this->peutEtre = $peutEtre;

        return $this;
    }

    public function getNo(): ?int
    {
        return $this->no;
    }

    public function setNo(?int $no): self
    {
        $this->no = $no;

        return $this;
    }

    public function getIdEven(): ?int
    {
        return $this->idEven;
    }

    public function setIdEven(int $idEven): self
    {
        $this->idEven = $idEven;

        return $this;
    }
}
