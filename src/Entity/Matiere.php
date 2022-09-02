<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="App\Repository\MatiereRepository")
 */
class Matiere
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMatiere", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmatiere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomMatiere", type="string", length=100, nullable=true)
     */
    private $nommatiere;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Formateur", inversedBy="idmatiere")
     * @ORM\JoinTable(name="enseigner",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idMatiere", referencedColumnName="idMatiere")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idFormateur", referencedColumnName="idFormateur")
     *   }
     * )
     */
    private $idformateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idformateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    // public function __toString()
    // {
    //     return $this->idformateur;
    // }

    public function getIdmatiere(): ?int
    {
        return $this->idmatiere;
    }

    public function getNommatiere(): ?string
    {
        return $this->nommatiere;
    }

    public function setNommatiere(?string $nommatiere): self
    {
        $this->nommatiere = $nommatiere;

        return $this;
    }

    /**
     * @return Collection<int, Formateur>
     */
    public function getIdformateur(): Collection
    {
        return $this->idformateur;
    }

    public function addIdformateur(Formateur $idformateur): self
    {
        if (!$this->idformateur->contains($idformateur)) {
            $this->idformateur[] = $idformateur;
        }

        return $this;
    }

    public function removeIdformateur(Formateur $idformateur): self
    {
        $this->idformateur->removeElement($idformateur);

        return $this;
    }

}
