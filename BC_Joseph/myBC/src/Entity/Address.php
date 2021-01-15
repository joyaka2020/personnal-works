<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AddressRepository::class)
 */
class Address
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ligne_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ligne_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ligne_3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    public function getId(): ?int
    {
        return $this->id;
    }

     public function __toString()
    {
        return $this->ligne_1; 
    }

    public function getLigne1(): ?string
    {
        return $this->ligne_1;
    }

    public function setLigne1(string $ligne_1): self
    {
        $this->ligne_1 = $ligne_1;

        return $this;
    }

    public function getLigne2(): ?string
    {
        return $this->ligne_2;
    }

    public function setLigne2(?string $ligne_2): self
    {
        $this->ligne_2 = $ligne_2;

        return $this;
    }

    public function getLigne3(): ?string
    {
        return $this->ligne_3;
    }

    public function setLigne3(?string $ligne_3): self
    {
        $this->ligne_3 = $ligne_3;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}