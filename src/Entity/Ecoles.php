<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EcolesRepository")
 */
class Ecoles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Theses", mappedBy="ecoles")
     */
    private $Theses;

    public function __construct()
    {
        $this->Theses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * @return Collection|Theses[]
     */
    public function getTheses(): Collection
    {
        return $this->Theses;
    }

    public function addThesis(Theses $thesis): self
    {
        if (!$this->Theses->contains($thesis)) {
            $this->Theses[] = $thesis;
            $thesis->setEcoles($this);
        }

        return $this;
    }

    public function removeThesis(Theses $thesis): self
    {
        if ($this->Theses->contains($thesis)) {
            $this->Theses->removeElement($thesis);
            // set the owning side to null (unless already changed)
            if ($thesis->getEcoles() === $this) {
                $thesis->setEcoles(null);
            }
        }

        return $this;
    }
}
