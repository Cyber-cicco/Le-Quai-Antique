<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Place::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idTable;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUtilisateur;

    /**
     * @ORM\Id
     * @ORM\Column(type="datetime")
     */
    private $dateReservation;

    public function getIdTable(): ?Place
    {
        return $this->idTable;
    }

    public function setIdTable(?Place $idTable): self
    {
        $this->idTable = $idTable;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }
}
