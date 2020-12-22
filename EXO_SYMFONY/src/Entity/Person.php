<?php

namespace App\Entity;

use App\Repository\PersonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PersonRepository::class)
 */
class Person
{
    /**
     * @Groups({"movie_extended"})
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"movie_extended"})
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity=Casting::class, mappedBy="person", orphanRemoval=true)
     */
    private $castings;

    /**
     * @ORM\OneToMany(targetEntity=Director::class, mappedBy="person", orphanRemoval=true)
     */
    private $directors;

    /**
     * @ORM\OneToMany(targetEntity=CrewMember::class, mappedBy="person", orphanRemoval=true)
     */
    private $crewMembers;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->castings = new ArrayCollection();
        $this->directors = new ArrayCollection();
        $this->crewMembers = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection|Casting[]
     */
    public function getCastings(): Collection
    {
        return $this->castings;
    }

    public function addCasting(Casting $casting): self
    {
        if (!$this->castings->contains($casting)) {
            $this->castings[] = $casting;
            $casting->setPerson($this);
        }

        return $this;
    }

    public function removeCasting(Casting $casting): self
    {
        if ($this->castings->removeElement($casting)) {
            // set the owning side to null (unless already changed)
            if ($casting->getPerson() === $this) {
                $casting->setPerson(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Director[]
     */
    public function getDirectors(): Collection
    {
        return $this->directors;
    }

    public function addDirector(Director $director): self
    {
        if (!$this->directors->contains($director)) {
            $this->directors[] = $director;
            $director->setPerson($this);
        }

        return $this;
    }

    public function removeDirector(Director $director): self
    {
        if ($this->directors->removeElement($director)) {
            // set the owning side to null (unless already changed)
            if ($director->getPerson() === $this) {
                $director->setPerson(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CrewMember[]
     */
    public function getCrewMembers(): Collection
    {
        return $this->crewMembers;
    }

    public function addCrewMember(CrewMember $crewMember): self
    {
        if (!$this->crewMembers->contains($crewMember)) {
            $this->crewMembers[] = $crewMember;
            $crewMember->setPerson($this);
        }

        return $this;
    }

    public function removeCrewMember(CrewMember $crewMember): self
    {
        if ($this->crewMembers->removeElement($crewMember)) {
            // set the owning side to null (unless already changed)
            if ($crewMember->getPerson() === $this) {
                $crewMember->setPerson(null);
            }
        }

        return $this;
    }
}
