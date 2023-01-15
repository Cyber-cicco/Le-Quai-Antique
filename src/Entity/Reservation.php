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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Place::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $table;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateReservation;

    /**
     * @param $idTable
     * @param $idUtilisateur
     * @param $dateReservation
     */
    public function __construct($table=null, $utilisateur=null, $dateReservation=null)
    {
        $this->table = $table;
        $this->utilisateur = $utilisateur;
        $this->dateReservation = $dateReservation;
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

    /**
     * @return mixed|null
     */
    public function getTable(){
        return $this->table;
    }

    /**
     * @param mixed|null $table
     */
    public function setTable($table): void{
        $this->table = $table;
    }

    /**
     * @return mixed|null
     */
    public function getUtilisateur(){
        return $this->utilisateur;
    }

    /**
     * @param mixed|null $utilisateur
     */
    public function setUtilisateur($utilisateur): void {
        $this->utilisateur = $utilisateur;
    }


}
