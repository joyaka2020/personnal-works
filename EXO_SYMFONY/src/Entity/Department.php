<?php

namespace App\Entity;

use App\Repository\DepartmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=DepartmentRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Department
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"job_extended"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"job_extended"})
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
     * @ORM\OneToMany(targetEntity=Job::class, mappedBy="department", orphanRemoval=true)
     */
    private $jobs;

    public function __construct()
    {
        // $this->createdAt = new \DateTime();
        $this->jobs = new ArrayCollection();
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
     * @return Collection|Job[]
     */
    public function getJobs(): Collection
    {
        return $this->jobs;
    }

    public function addJob(Job $job): self
    {
        if (!$this->jobs->contains($job)) {
            $this->jobs[] = $job;
            $job->setDepartment($this);
        }

        return $this;
    }

    public function removeJob(Job $job): self
    {
        if ($this->jobs->removeElement($job)) {
            // set the owning side to null (unless already changed)
            if ($job->getDepartment() === $this) {
                $job->setDepartment(null);
            }
        }

        return $this;
    }

    /**
     * @ORM\PrePersist
     * 
     * prePersist s'exécute avant d'insérer un objet Department en BDD
     * On s'en sert pour vérifier que la propriété $createdAt existe
     * Si ce n'est pas le cas, on la crée
     *
     * @return void
     */
    public function prePersist()
    {
        if ($this->createdAt === null) {
            $this->createdAt = new \DateTime();
        }
    }
}
