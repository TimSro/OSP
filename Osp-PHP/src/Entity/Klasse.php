<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlasseRepository")
 */
class Klasse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Benutzer", inversedBy="klasses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $benutzer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Schueler", mappedBy="klasse")
     */
    private $schuelers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Todo", mappedBy="klasse")
     */
    private $todos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\KalenderEintrag", mappedBy="klasse")
     */
    private $kalenderEintrags;

    public function __construct()
    {
        $this->schuelers = new ArrayCollection();
        $this->todos = new ArrayCollection();
        $this->kalenderEintrags = new ArrayCollection();
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

    public function getBenutzer(): ?Benutzer
    {
        return $this->benutzer;
    }

    public function setBenutzer(?Benutzer $benutzer): self
    {
        $this->benutzer = $benutzer;

        return $this;
    }

    /**
     * @return Collection|Schueler[]
     */
    public function getSchuelers(): Collection
    {
        return $this->schuelers;
    }

    public function addSchueler(Schueler $schueler): self
    {
        if (!$this->schuelers->contains($schueler)) {
            $this->schuelers[] = $schueler;
            $schueler->setKlasse($this);
        }

        return $this;
    }

    public function removeSchueler(Schueler $schueler): self
    {
        if ($this->schuelers->contains($schueler)) {
            $this->schuelers->removeElement($schueler);
            // set the owning side to null (unless already changed)
            if ($schueler->getKlasse() === $this) {
                $schueler->setKlasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Todo[]
     */
    public function getTodos(): Collection
    {
        return $this->todos;
    }

    public function addTodo(Todo $todo): self
    {
        if (!$this->todos->contains($todo)) {
            $this->todos[] = $todo;
            $todo->setKlasse($this);
        }

        return $this;
    }

    public function removeTodo(Todo $todo): self
    {
        if ($this->todos->contains($todo)) {
            $this->todos->removeElement($todo);
            // set the owning side to null (unless already changed)
            if ($todo->getKlasse() === $this) {
                $todo->setKlasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|KalenderEintrag[]
     */
    public function getKalenderEintrags(): Collection
    {
        return $this->kalenderEintrags;
    }

    public function addKalenderEintrag(KalenderEintrag $kalenderEintrag): self
    {
        if (!$this->kalenderEintrags->contains($kalenderEintrag)) {
            $this->kalenderEintrags[] = $kalenderEintrag;
            $kalenderEintrag->setKlasse($this);
        }

        return $this;
    }

    public function removeKalenderEintrag(KalenderEintrag $kalenderEintrag): self
    {
        if ($this->kalenderEintrags->contains($kalenderEintrag)) {
            $this->kalenderEintrags->removeElement($kalenderEintrag);
            // set the owning side to null (unless already changed)
            if ($kalenderEintrag->getKlasse() === $this) {
                $kalenderEintrag->setKlasse(null);
            }
        }

        return $this;
    }
}
