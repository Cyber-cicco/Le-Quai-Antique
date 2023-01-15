<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_restaurant;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Place", mappedBy="restaurant")
    */
    private $tables;

    public function getIdRestaurant(): ?int
    {
        return $this->id_restaurant;
    }


    public function getNomRestaurant(): ?string
    {
        return $this->nom_restaurant;
    }

    public function setNomRestaurant(string $nom_restaurant): self
    {
        $this->nom_restaurant = $nom_restaurant;

        return $this;
    }
}
