<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
{


    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=320)
     */
    private $id_utilisateur;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAdmin;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbConvives;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="idUtilisateur", orphanRemoval=true)
     */
    private $reservations;

    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Allergene", mappedBy="utilisateurs")
     */
    private Collection $allergenes;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur(): ?string
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(string $id_utilisateur): self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function isIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getNbConvives(): ?int
    {
        return $this->nbConvives;
    }

    public function setNbConvives(int $nbConvives): self
    {
        $this->nbConvives = $nbConvives;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setIdUtilisateur($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getIdUtilisateur() === $this) {
                $reservation->setIdUtilisateur(null);
            }
        }

        return $this;
    }
}
