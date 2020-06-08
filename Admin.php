<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
class Admin
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
    private $nomadmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomadmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailadmin;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephoneadmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseadmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginadmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdpadmin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomadmin(): ?string
    {
        return $this->nomadmin;
    }

    public function setNomadmin(string $nomadmin): self
    {
        $this->nomadmin = $nomadmin;

        return $this;
    }

    public function getPrenomadmin(): ?string
    {
        return $this->prenomadmin;
    }

    public function setPrenomadmin(string $prenomadmin): self
    {
        $this->prenomadmin = $prenomadmin;

        return $this;
    }

    public function getMailadmin(): ?string
    {
        return $this->mailadmin;
    }

    public function setMailadmin(string $mailadmin): self
    {
        $this->mailadmin = $mailadmin;

        return $this;
    }

    public function getTelephoneadmin(): ?int
    {
        return $this->telephoneadmin;
    }

    public function setTelephoneadmin(int $telephoneadmin): self
    {
        $this->telephoneadmin = $telephoneadmin;

        return $this;
    }

    public function getAdresseadmin(): ?string
    {
        return $this->adresseadmin;
    }

    public function setAdresseadmin(string $adresseadmin): self
    {
        $this->adresseadmin = $adresseadmin;

        return $this;
    }

    public function getLoginadmin(): ?string
    {
        return $this->loginadmin;
    }

    public function setLoginadmin(string $loginadmin): self
    {
        $this->loginadmin = $loginadmin;

        return $this;
    }

    public function getMdpadmin(): ?string
    {
        return $this->mdpadmin;
    }

    public function setMdpadmin(string $mdpadmin): self
    {
        $this->mdpadmin = $mdpadmin;

        return $this;
    }
}
