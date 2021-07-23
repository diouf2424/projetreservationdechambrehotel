<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 * @ApiResource()
 */
class Chambre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typachambre;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrelit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typelit;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity=Reservation::class, inversedBy="chambre")
     */
    private $reservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypachambre(): ?string
    {
        return $this->typachambre;
    }

    public function setTypachambre(string $typachambre): self
    {
        $this->typachambre = $typachambre;

        return $this;
    }

    public function getNombrelit(): ?int
    {
        return $this->nombrelit;
    }

    public function setNombrelit(int $nombrelit): self
    {
        $this->nombrelit = $nombrelit;

        return $this;
    }

    public function getTypelit(): ?string
    {
        return $this->typelit;
    }

    public function setTypelit(string $typelit): self
    {
        $this->typelit = $typelit;

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }
}
