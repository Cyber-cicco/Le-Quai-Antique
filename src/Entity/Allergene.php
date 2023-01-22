<?php

namespace App\Entity;

use App\Repository\AllergeneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Collection;

/**
 * @ORM\Entity(repositoryClass=AllergeneRepository::class)
 */
class Allergene
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomAllergene;

    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Plat", mappedBy="allergenes")
    */
    private $plats;

    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Utilisateur", mappedBy="allergenes")
    */
    private $utilisateurs;

    /**
     * @param $nomAllergene
     */
    public function __construct($nomAllergene = null)
    {
        $this->nomAllergene = $nomAllergene;
        $this->plats = new ArrayCollection();
    }


    public function getId(): ?int{
        return $this->id;
    }

    public function getNomAllergene(): ?string{
        return $this->nomAllergene;
    }

    public function setNomAllergene(string $nomAllergene): self{
        $this->nomAllergene = $nomAllergene;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getUtilisateurs(): Collection{
        return $this->utilisateurs;
    }

    /**
     * @param Collection $utilisateurs
     */
    public function setUtilisateurs(Collection $utilisateurs): void{
        $this->utilisateurs = $utilisateurs;
    }

    /**
     * @return Collection
     */
    public function getPlats() {
        return $this->plats;
    }

    /**
     * @param Collection $plats
     */
    public function setPlats(Collection $plats): void{
        $this->plats = $plats;
    }

}
