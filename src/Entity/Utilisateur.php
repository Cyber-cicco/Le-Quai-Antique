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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
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
     * @ORM\ManyToMany(targetEntity=Allergene::class, inversedBy="utilisateurs")
     * @ORM\JoinTable(name="allergie")
     */
    private $allergenes;

    /**
     * @param $id_utilisateur
     * @param $motDePasse
     * @param $isAdmin
     * @param $nbConvives
     * @param $reservations
     * @param $allergenes
     */
    public function __construct($id_utilisateur=null, $motDePasse=null, $isAdmin=null, $nbConvives=null)
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->motDePasse = $motDePasse;
        $this->isAdmin = $isAdmin;
        $this->nbConvives = $nbConvives;
        $this->reservations = new ArrayCollection();
        $this->allergenes = new ArrayCollection();
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

    /**
     * @return ArrayCollection
     */
    public function getAllergenes(): ArrayCollection
    {
        return $this->allergenes;
    }

    /**
     * @param ArrayCollection $allergenes
     */
    public function setAllergenes(ArrayCollection $allergenes): void
    {
        $this->allergenes = $allergenes;
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