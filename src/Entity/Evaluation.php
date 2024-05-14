<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="idStagiaire", columns={"idStagiaire"}), @ORM\Index(name="idMatiere", columns={"idMatiere"})})
 * @ORM\Entity(repositoryClass="App\Repository\EvaluationRepository")
 */
class Evaluation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvaluation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevaluation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="note", type="smallint", nullable=true)
     */
    private $note;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEvaluation", type="date", nullable=true)
     */
    private $dateevaluation;

    /**
     * @var Matiere|null
     *
     * @ORM\ManyToOne(targetEntity=Matiere::class)
     * @ORM\JoinColumn(name="idMatiere", referencedColumnName="idMatiere", nullable=true)
     */
    private $idmatiere;

    /**
     * @var Stagiaire|null
     *
     * @ORM\ManyToOne(targetEntity=Stagiaire::class)
     * @ORM\JoinColumn(name="idStagiaire", referencedColumnName="idStagiaire", nullable=true)
     */
    private $idstagiaire;


    public function getIdevaluation(): ?int
    {
        return $this->idevaluation;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getDateevaluation(): ?\DateTimeInterface
    {
        return $this->dateevaluation;
    }

    public function setDateevaluation(?\DateTimeInterface $dateevaluation): self
    {
        $this->dateevaluation = $dateevaluation;

        return $this;
    }

    public function getIdmatiere(): ?Matiere
    {
        return $this->idmatiere;
    }

    public function setIdmatiere(?Matiere $idmatiere): self
    {
        $this->idmatiere = $idmatiere;

        return $this;
    }

    public function getIdstagiaire(): ?Stagiaire
    {
        return $this->idstagiaire;
    }

    public function setIdstagiaire(?Stagiaire $idstagiaire): self
    {
        $this->idstagiaire = $idstagiaire;

        return $this;
    }


}
