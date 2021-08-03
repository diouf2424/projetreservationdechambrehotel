<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChambreRepository", repositoryClass=ChambreRepository::class)
 */
#[ApiResource(

)]

class Chambre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[group(['lecture:collection'])] 
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[group(['lecture:collection'])]
    private $typachambre;

    /**
     * @ORM\Column(type="integer")
     */
    #[group(['lecture:collection'])]
    private $nombrelit;
    /**
     * @ORM\Column(type="integer")
     */
    #[group(['lecture:collection'])]
    private $prixparnuit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typelit;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="chambre")
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
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

    public function getPrixparnuit(): ?int
    {
        return $this->prixparnuit;
    }

    public function setPrixparnuit(int $prixparnuit): self
    {
        $this->prixparnuit = $prixparnuit;

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

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setChambre($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getChambre() === $this) {
                $reservation->setChambre(null);
            }
        }

        return $this;
    }


}
