<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Chauffeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Kenteken;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getChauffeur(): ?string
    {
        return $this->Chauffeur;
    }

    public function setChauffeur(string $Chauffeur): self
    {
        $this->Chauffeur = $Chauffeur;

        return $this;
    }

    public function getKenteken(): ?string
    {
        return $this->Kenteken;
    }

    public function setKenteken(string $Kenteken): self
    {
        $this->Kenteken = $Kenteken;

        return $this;
    }
}
