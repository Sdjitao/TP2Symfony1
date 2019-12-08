<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
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
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descrip;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lien;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Universite", inversedBy="Projet")
     */
    private $universite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescrip(): ?string
    {
        return $this->descrip;
    }

    public function setDescrip(string $descrip): self
    {
        $this->descrip = $descrip;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getUniversite(): ?Universite
    {
        return $this->universite;
    }

    public function setUniversite(?Universite $universite): self
    {
        $this->universite = $universite;

        return $this;
    }
}
