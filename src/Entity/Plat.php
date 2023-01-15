<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Collection;

/**
 * @ORM\Entity(repositoryClass=PlatRepository::class)
 */
class Plat
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
    private $nomPlat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typePlat;

    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Formule", mappedBy="plats")
    */
    private $formules;

    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Allergene", mappedBy="plats")
    */
    private Collection $allergenes;

    /**
     * @return mixed
     */
    public function getFormules()
    {
        return $this->formules;
    }

    /**
     * @param mixed $formules
     */
    public function setFormules($formules): void
    {
        $this->formules = $formules;
    }

    public function getNomPlat(): ?string
    {
        return $this->nomPlat;
    }

    public function setNomPlat(string $nomPlat): self
    {
        $this->nomPlat = $nomPlat;

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

    public function getTypePlat(): ?string
    {
        return $this->typePlat;
    }

    public function setTypePlat(string $typePlat): self
    {
        $this->typePlat = $typePlat;

        return $this;
    }

}
