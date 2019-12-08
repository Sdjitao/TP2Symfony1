<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UniversiteRepository")
 */
class Universite
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
     * @ORM\OneToMany(targetEntity="App\Entity\Formation", mappedBy="universite")
     */
    private $Formation;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Projet", mappedBy="universite")
     */
    private $Projet;

    public function __construct()
    {
        $this->Formation = new ArrayCollection();
        $this->Projet = new ArrayCollection();
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
     * @return Collection|Formation[]
     */
    public function getFormation(): Collection
    {
        return $this->Formation;
    }

    public function addFormation(Formation $formation): self
    {
        if (!$this->Formation->contains($formation)) {
            $this->Formation[] = $formation;
            $formation->setUniversite($this);
        }

        return $this;
    }

    public function removeFormation(Formation $formation): self
    {
        if ($this->Formation->contains($formation)) {
            $this->Formation->removeElement($formation);
            // set the owning side to null (unless already changed)
            if ($formation->getUniversite() === $this) {
                $formation->setUniversite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Projet[]
     */
    public function getProjet(): Collection
    {
        return $this->Projet;
    }

    public function addProjet(Projet $projet): self
    {
        if (!$this->Projet->contains($projet)) {
            $this->Projet[] = $projet;
            $projet->setUniversite($this);
        }

        return $this;
    }

    public function removeProjet(Projet $projet): self
    {
        if ($this->Projet->contains($projet)) {
            $this->Projet->removeElement($projet);
            // set the owning side to null (unless already changed)
            if ($projet->getUniversite() === $this) {
                $projet->setUniversite(null);
            }
        }

        return $this;
    }
}
