<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FormationRepository")
 */
class Formation
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
    private $Nomformation;

    /**
     * @ORM\Column(type="date")
     */
    private $datedebutf;

    /**
     * @ORM\Column(type="date")
     */
    private $datefinf;

    /**
     * @ORM\Column(type="float")
     */
    private $prixf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomformation(): ?string
    {
        return $this->Nomformation;
    }

    public function setNomformation(string $Nomformation): self
    {
        $this->Nomformation = $Nomformation;

        return $this;
    }

    public function getDatedebutf(): ?\DateTimeInterface
    {
        return $this->datedebutf;
    }

    public function setDatedebutf(\DateTimeInterface $datedebutf): self
    {
        $this->datedebutf = $datedebutf;

        return $this;
    }

    public function getDatefinf(): ?\DateTimeInterface
    {
        return $this->datefinf;
    }

    public function setDatefinf(\DateTimeInterface $datefinf): self
    {
        $this->datefinf = $datefinf;

        return $this;
    }

    public function getPrixf(): ?float
    {
        return $this->prixf;
    }

    public function setPrixf(float $prixf): self
    {
        $this->prixf = $prixf;

        return $this;
    }

    public function getTypef(): ?string
    {
        return $this->typef;
    }

    public function setTypef(string $typef): self
    {
        $this->typef = $typef;

        return $this;
    }

    public function getDescriptionf(): ?string
    {
        return $this->descriptionf;
    }

    public function setDescriptionf(string $descriptionf): self
    {
        $this->descriptionf = $descriptionf;

        return $this;
    }
}
