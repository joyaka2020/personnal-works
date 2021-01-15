<?php

namespace App\Entity;

use App\Repository\GarageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GarageRepository::class)
 */
class Garage
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
    private $denomination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="date")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observation;

    /**
     * @ORM\OneToMany(targetEntity=Announcement::class, mappedBy="garage")
     */
    private $announcement;

    /**
     * @ORM\ManyToOne(targetEntity=Professionnal::class)
     */
    private $professionnal;

    /**
     * @ORM\OneToOne(targetEntity=Address::class, cascade={"persist", "remove"})
     */
    private $address;

    public function __construct()
    {
        $this->announcement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->denomination;
    }

    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    public function setDenomination(string $denomination): self
    {
        $this->denomination = $denomination;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * @return Collection|Announcement[]
     */
    public function getAnnouncement(): Collection
    {
        return $this->announcement;
    }

    public function addAnnouncement(Announcement $announcement): self
    {
        if (!$this->announcement->contains($announcement)) {
            $this->announcement[] = $announcement;
            $announcement->setGarage($this);
        }

        return $this;
    }

    public function removeAnnouncement(Announcement $announcement): self
    {
        if ($this->announcement->removeElement($announcement)) {
            // set the owning side to null (unless already changed)
            if ($announcement->getGarage() === $this) {
                $announcement->setGarage(null);
            }
        }

        return $this;
    }

    public function getProfessionnal(): ?Professionnal
    {
        return $this->professionnal;
    }

    public function setProfessionnal(?Professionnal $professionnal): self
    {
        $this->professionnal = $professionnal;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }
}