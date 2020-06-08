<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\FormateurRepository")
 */
class Formateur
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
    private $nomformateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomformateur;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $mailformateur;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(8)
     */
    private $telephoneformateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseformateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domaineformateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdpformateur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Images", mappedBy="formateur", cascade={"persist", "remove"})
     */
    private $imagesf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomformateur(): ?string
    {
        return $this->nomformateur;
    }

    public function setNomformateur(string $nomformateur): self
    {
        $this->nomformateur = $nomformateur;

        return $this;
    }

    public function getPrenomformateur(): ?string
    {
        return $this->prenomformateur;
    }

    public function setPrenomformateur(string $prenomformateur): self
    {
        $this->prenomformateur = $prenomformateur;

        return $this;
    }

    public function getMailformateur(): ?string
    {
        return $this->mailformateur;
    }

    public function setMailformateur(string $mailformateur): self
    {
        $this->mailformateur = $mailformateur;

        return $this;
    }

    public function getTelephoneformateur(): ?int
    {
        return $this->telephoneformateur;
    }

    public function setTelephoneformateur(int $telephoneformateur): self
    {
        $this->telephoneformateur = $telephoneformateur;

        return $this;
    }

    public function getAdresseformateur(): ?string
    {
        return $this->adresseformateur;
    }

    public function setAdresseformateur(string $adresseformateur): self
    {
        $this->adresseformateur = $adresseformateur;

        return $this;
    }

    public function getDomaineformateur(): ?string
    {
        return $this->domaineformateur;
    }

    public function setDomaineformateur(string $domaineformateur): self
    {
        $this->domaineformateur = $domaineformateur;

        return $this;
    }

    public function getLoginformateur(): ?string
    {
        return $this->loginformateur;
    }

    public function setLoginformateur(string $loginformateur): self
    {
        $this->loginformateur = $loginformateur;

        return $this;
    }

    public function getMdpformateur(): ?string
    {
        return $this->mdpformateur;
    }

    public function setMdpformateur(string $mdpformateur): self
    {
        $this->mdpformateur = $mdpformateur;

        return $this;
    }

    public function getImagesf(): ?Images
    {
        return $this->imagesf;
    }

    public function setImagesf(Images $imagesf): self
    {
        $this->imagesf = $imagesf;

        // set the owning side of the relation if necessary
        if ($imagesf->getFormateur() !== $this) {
            $imagesf->setFormateur($this);
        }

        return $this;
    }
}
