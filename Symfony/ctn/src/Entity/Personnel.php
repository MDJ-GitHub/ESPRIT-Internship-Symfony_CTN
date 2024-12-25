<?php

namespace App\Entity;

use App\Repository\PersonnelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnelRepository::class)]
class Personnel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $daten = null;

    #[ORM\Column(length: 255)]
    private ?string $lieun = null;

    #[ORM\Column(length: 1)]
    private ?string $sexe = null;

    #[ORM\Column]
    private ?int $tel = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $typep = "Navigant";

    #[ORM\Column]
    private ?int $archived = 0;

    #[ORM\Column(length: 255)]
    private ?string $fonction = null;

    #[ORM\Column(length: 255)]
    private ?string $navire = null;

    #[ORM\Column(length: 255)]
    private ?string $motpasse = '';

    #[ORM\OneToOne(mappedBy: 'matriculep', cascade: ['persist', 'remove'])]
    private ?Evaluation $evaluation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datecon = null;

    #[ORM\Column(nullable: true)]
    private ?int $jourc = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDaten(): ?\DateTimeInterface
    {
        return $this->daten;
    }

    public function setDaten(\DateTimeInterface $daten): static
    {
        $this->daten = $daten;

        return $this;
    }

    public function getLieun(): ?string
    {
        return $this->lieun;
    }

    public function setLieun(string $lieun): static
    {
        $this->lieun = $lieun;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTypep(): ?string
    {
        return $this->typep;
    }

    public function setTypep(string $typep): static
    {
        $this->typep = $typep;

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

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): static
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getNavire(): ?string
    {
        return $this->navire;
    }

    public function setNavire(string $navire): static
    {
        $this->navire = $navire;

        return $this;
    }

    public function getMotpasse(): ?string
    {
        return $this->motpasse;
    }

    public function setMotpasse(string $motpasse): static
    {
        $this->motpasse = $motpasse;

        return $this;
    }

    public function getEvaluation(): ?Evaluation
    {
        return $this->evaluation;
    }

    public function setEvaluation(Evaluation $evaluation): static
    {
        // set the owning side of the relation if necessary
        if ($evaluation->getMatriculep() !== $this) {
            $evaluation->setMatriculep($this);
        }

        $this->evaluation = $evaluation;

        return $this;
    }

    public function getDatecon(): ?\DateTimeInterface
    {
        return $this->datecon;
    }

    public function setDatecon(?\DateTimeInterface $datecon): static
    {
        $this->datecon = $datecon;

        return $this;
    }

    public function getJourc(): ?int
    {
        return $this->jourc;
    }

    public function setJourc(?int $jourc): static
    {
        $this->jourc = $jourc;

        return $this;
    }
}
