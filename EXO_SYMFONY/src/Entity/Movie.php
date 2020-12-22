<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Movie
{
    /**
     * @Groups({"genre", "movie"})
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"genre", "movie"})
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @Groups({"movie"})
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @Groups({"movie"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @Groups({"movie_extended"})
     * @ORM\OneToMany(targetEntity=Casting::class, mappedBy="movie", orphanRemoval=true)
     */
    private $castings;

    /**
     * @Groups({"movie_extended"})
     * @ORM\ManyToMany(targetEntity=Genre::class, inversedBy="movies")
     */
    private $genres;

    /**
     * @Groups({"movie_extended"})
     * @ORM\OneToMany(targetEntity=Director::class, mappedBy="movie", orphanRemoval=true)
     */
    private $directors;

    /**
     * @Groups({"movie_extended"})
     * @ORM\OneToMany(targetEntity=CrewMember::class, mappedBy="movie", orphanRemoval=true)
     */
    private $crewMembers;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    public function __construct()
    {
        $this->castings = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->genres = new ArrayCollection();
        $this->directors = new ArrayCollection();
        $this->crewMembers = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->title;
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
            $casting->setMovie($this);
        }

        return $this;
    }

    public function removeCasting(Casting $casting): self
    {
        if ($this->castings->removeElement($casting)) {
            // set the owning side to null (unless already changed)
            if ($casting->getMovie() === $this) {
                $casting->setMovie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->genres->contains($genre)) {
            $this->genres[] = $genre;
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->genres->removeElement($genre);

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
            $director->setMovie($this);
        }

        return $this;
    }

    public function removeDirector(Director $director): self
    {
        if ($this->directors->removeElement($director)) {
            // set the owning side to null (unless already changed)
            if ($director->getMovie() === $this) {
                $director->setMovie(null);
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
            $crewMember->setMovie($this);
        }

        return $this;
    }

    public function removeCrewMember(CrewMember $crewMember): self
    {
        if ($this->crewMembers->removeElement($crewMember)) {
            // set the owning side to null (unless already changed)
            if ($crewMember->getMovie() === $this) {
                $crewMember->setMovie(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
}
