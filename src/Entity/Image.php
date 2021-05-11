<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
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
     * @ORM\ManyToOne(targetEntity=Audio::class, inversedBy="images")
     */
    private $audio;

    /**
     * @ORM\OneToMany(targetEntity=Actu::class, mappedBy="image")
     */
    private $actus;

    public function __construct()
    {
        $this->actus = new ArrayCollection();
    }

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

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function setAudio(?Audio $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * @return Collection|Actu[]
     */
    public function getActus(): Collection
    {
        return $this->actus;
    }

    public function addActu(Actu $actu): self
    {
        if (!$this->actus->contains($actu)) {
            $this->actus[] = $actu;
            $actu->setImage($this);
        }

        return $this;
    }

    public function removeActu(Actu $actu): self
    {
        if ($this->actus->removeElement($actu)) {
            // set the owning side to null (unless already changed)
            if ($actu->getImage() === $this) {
                $actu->setImage(null);
            }
        }

        return $this;
    }
}
