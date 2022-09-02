<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity(repositoryClass="App\Repository\FormateurRepository")
 */
class Formateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Matiere", mappedBy="idformateur")
     */
    private $idmatiere;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmatiere = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function getIdformateur(): ?int
    {
        return $this->idformateur;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection<int, Matiere>
     */
    public function getIdmatiere(): Collection
    {
        return $this->idmatiere;
    }

    public function addIdmatiere(Matiere $idmatiere): self
    {
        if (!$this->idmatiere->contains($idmatiere)) {
            $this->idmatiere[] = $idmatiere;
            $idmatiere->addIdformateur($this);
        }

        return $this;
    }

    public function removeIdmatiere(Matiere $idmatiere): self
    {
        if ($this->idmatiere->removeElement($idmatiere)) {
            $idmatiere->removeIdformateur($this);
        }

        return $this;
    }

}
