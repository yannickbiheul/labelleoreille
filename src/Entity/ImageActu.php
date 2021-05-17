<?php

namespace App\Entity;

use App\Repository\ImageActuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageActuRepository::class)
 */
class ImageActu
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
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=Actu::class, inversedBy="imageActus")
     * @ORM\JoinColumn(nullable=true)
     */
    private $actu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getActu(): ?Actu
    {
        return $this->actu;
    }

    public function setActu(?Actu $actu): self
    {
        $this->actu = $actu;

        return $this;
    }
}
