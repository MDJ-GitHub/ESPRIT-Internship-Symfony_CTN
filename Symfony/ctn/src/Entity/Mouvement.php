<?php

namespace App\Entity;

use App\Repository\MouvementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MouvementRepository::class)]
class Mouvement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateemb = null;

    #[ORM\Column(type: Types::DATE_MUTABLE,nullable: true)]
    private ?\DateTimeInterface $datedeb = null;

    #[ORM\Column(length: 255)]
    private ?string $portdep = null;

    #[ORM\Column(length: 255)]
    private ?string $portdes = null;

    #[ORM\Column(length: 255)]
    private ?string $situation = null;

    #[ORM\ManyToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Personnel $matriculep = null;

    #[ORM\Column]
    private ?int $archived = 0;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\OneToOne(mappedBy: 'matriculem', cascade: ['persist', 'remove'])]
    private ?Evaluation $evaluation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateembc = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datedebc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateemb(): ?\DateTimeInterface
    {
        return $this->dateemb;
    }

    public function setDateemb(\DateTimeInterface $dateemb): static
    {
        $this->dateemb = $dateemb;

        return $this;
    }

    public function getDatedeb(): ?\DateTimeInterface
    {
        return $this->datedeb;
    }

    public function setDatedeb(?\DateTimeInterface $datedeb): static
    {
        $this->datedeb = $datedeb;

        return $this;
    }

    public function getPortdep(): ?string
    {
        return $this->portdep;
    }

    public function setPortdep(string $portdep): static
    {
        $this->portdep = $portdep;

        return $this;
    }

    public function getPortdes(): ?string
    {
        return $this->portdes;
    }

    public function setPortdes(string $portdes): static
    {
        $this->portdes = $portdes;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): static
    {
        $this->situation = $situation;

        return $this;
    }

    public function getMatriculep(): ?Personnel
    {
        return $this->matriculep;
    }

    public function setMatriculep(Personnel $matriculep): static
    {
        $this->matriculep = $matriculep;

        return $this;
    }

    public function getArchived(): ?int
    {
        return $this->archived;
    }

    public function setArchived(int $archived): static
    {
        $this->archived = $archived;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getEvaluation(): ?Evaluation
    {
        return $this->evaluation;
    }

    public function setEvaluation(?Evaluation $evaluation): static
    {
        // unset the owning side of the relation if necessary
        if ($evaluation === null && $this->evaluation !== null) {
            $this->evaluation->setMatriculem(null);
        }

        // set the owning side of the relation if necessary
        if ($evaluation !== null && $evaluation->getMatriculem() !== $this) {
            $evaluation->setMatriculem($this);
        }

        $this->evaluation = $evaluation;

        return $this;
    }

    public function getDateembc(): ?\DateTimeInterface
    {
        return $this->dateembc;
    }

    public function setDateembc(?\DateTimeInterface $dateembc): static
    {
        $this->dateembc = $dateembc;

        return $this;
    }

    public function getDatedebc(): ?\DateTimeInterface
    {
        return $this->datedebc;
    }

    public function setDatedebc(?\DateTimeInterface $datedebc): static
    {
        $this->datedebc = $datedebc;

        return $this;
    }
}
