<?php

namespace App\Entity;

use App\Repository\AnnouncementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnouncementRepository::class)
 */
class Announcement
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
    private $title;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mileage;

    /**
     * @ORM\Column(type="date")
     */
    private $depositDate;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $announcementReference;

    /**
     * @ORM\OneToMany(targetEntity=Contact::class, mappedBy="announcement")
     */
    private $contact;

    /**
     * @ORM\ManyToOne(targetEntity=Model::class)
     */
    private $model;

    /**
     * @ORM\ManyToOne(targetEntity=Energy::class)
     */
    private $energy;

    /**
     * @ORM\OneToMany(targetEntity=Photo::class, mappedBy="announcement")
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity=Garage::class, inversedBy="announcement")
     */
    private $garage;

    public function __construct()
    {
        $this->contact = new ArrayCollection();
        $this->photo = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getMileage(): ?string
    {
        return $this->mileage;
    }

    public function setMileage(?string $mileage): self
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getDepositDate(): ?\DateTimeInterface
    {
        return $this->depositDate;
    }

    public function setDepositDate(\DateTimeInterface $depositDate): self
    {
        $this->depositDate = $depositDate;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAnnouncementReference(): ?string
    {
        return $this->announcementReference;
    }

    public function setAnnouncementReference(string $announcementReference): self
    {
        $this->announcementReference = $announcementReference;

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContact(): Collection
    {
        return $this->contact;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contact->contains($contact)) {
            $this->contact[] = $contact;
            $contact->setAnnouncement($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contact->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getAnnouncement() === $this) {
                $contact->setAnnouncement(null);
            }
        }

        return $this;
    }

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function setModel(?Model $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getEnergy(): ?Energy
    {
        return $this->energy;
    }

    public function setEnergy(?Energy $energy): self
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * @return Collection|Photo[]
     */
    public function getPhoto(): Collection
    {
        return $this->photo;
    }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->photo->contains($photo)) {
            $this->photo[] = $photo;
            $photo->setAnnouncement($this);
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        if ($this->photo->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getAnnouncement() === $this) {
                $photo->setAnnouncement(null);
            }
        }

        return $this;
    }

    public function getGarage(): ?Garage
    {
        return $this->garage;
    }

    public function setGarage(?Garage $garage): self
    {
        $this->garage = $garage;

        return $this;
    }
}