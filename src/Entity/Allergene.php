<?php

namespace App\Entity;

use App\Repository\AllergeneRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Collection;

/**
 * @ORM\Entity(repositoryClass=AllergeneRepository::class)
 */
class Allergene
{

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     */
    private $nomAllergene;

    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Plat", inversedBy="allergenes")
     * @ORM\JoinTable(name="Plallergene")
    */
    private Collection $plats;

    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Utilisateur", inversedBy="allergenes")
    * @ORM\JoinTable(name="Allergie")
    */
    private Collection $utilisateurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAllergene(): ?string
    {
        return $this->nomAllergene;
    }

    public function setNomAllergene(string $nomAllergene): self
    {
        $this->nomAllergene = $nomAllergene;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    /**
     * @param Collection $utilisateurs
     */
    public function setUtilisateurs(Collection $utilisateurs): void
    {
        $this->utilisateurs = $utilisateurs;
    }

    /**
     * @return Collection
     */
    public function getPlats(): Collection
    {
        return $this->plats;
    }

    /**
     * @param Collection $plats
     */
    public function setPlats(Collection $plats): void
    {
        $this->plats = $plats;
    }


}
