<?php

namespace App\Entity;

use App\Repository\FormuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormuleRepository::class)
 */
class Formule
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
    private $nomFormule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity=Menu::class, inversedBy="formules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nomMenu;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Plat", inversedBy="formules")
     * @ORM\JoinTable(name="composition")
     */
    private $plats;

    /**
     * @param $nomFormule
     * @param $description
     * @param $prix
     * @param $nomMenu
     */
    public function __construct($nomFormule = null, $description = null, $prix = null, $nomMenu=null)
    {
        $this->nomFormule = $nomFormule;
        $this->description = $description;
        $this->prix = $prix;
        $this->nomMenu = $nomMenu;
        $this->plats = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getPlats()
    {
        return $this->plats;
    }

    /**
     * @param mixed $plats
     */
    public function setPlats($plats): void
    {
        $this->plats = $plats;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFormule(): ?string
    {
        return $this->nomFormule;
    }

    public function setNomFormule(string $nomFormule): self
    {
        $this->nomFormule = $nomFormule;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNomMenu(): ?Menu
    {
        return $this->nomMenu;
    }

    public function setNomMenu(?Menu $nomMenu): self
    {
        $this->nomMenu = $nomMenu;

        return $this;
    }

}
