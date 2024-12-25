<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $note = null;

    #[ORM\Column(length: 500)]
    private ?string $commentaire = null;

    #[ORM\OneToOne(inversedBy: 'evaluation', cascade: ['persist', 'remove'])]
    private ?Mouvement $matriculem = null;

    #[ORM\ManyToOne(inversedBy: 'evaluation', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Personnel $matriculep = null;

    #[ORM\Column]
    private ?int $archived = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getMatriculem(): ?Mouvement
    {
        return $this->matriculem;
    }

    public function setMatriculem(?Mouvement $matriculem): static
    {
        $this->matriculem = $matriculem;

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
}
