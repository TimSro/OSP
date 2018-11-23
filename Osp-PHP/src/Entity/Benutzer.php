<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BenutzerRepository")
 */
class Benutzer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $geschlecht;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $spGesetzt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Klasse", mappedBy="benutzer")
     */
    private $klasses;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Todo", mappedBy="benutzer")
     */
    private $todos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\KalenderEintrag", mappedBy="benutzer")
     */
    private $kalenderEintrags;

    public function __construct()
    {
        $this->klasses = new ArrayCollection();
        $this->todos = new ArrayCollection();
        $this->kalenderEintrags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeschlecht(): ?string
    {
        return $this->geschlecht;
    }

    public function setGeschlecht(string $geschlecht): self
    {
        $this->geschlecht = $geschlecht;

        return $this;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSpGesetzt(): ?bool
    {
        return $this->spGesetzt;
    }

    public function setSpGesetzt(bool $spGesetzt): self
    {
        $this->spGesetzt = $spGesetzt;

        return $this;
    }

    /**
     * @return Collection|Klasse[]
     */
    public function getKlasses(): Collection
    {
        return $this->klasses;
    }

    public function addKlass(Klasse $klass): self
    {
        if (!$this->klasses->contains($klass)) {
            $this->klasses[] = $klass;
            $klass->setBenutzer($this);
        }

        return $this;
    }

    public function removeKlass(Klasse $klass): self
    {
        if ($this->klasses->contains($klass)) {
            $this->klasses->removeElement($klass);
            // set the owning side to null (unless already changed)
            if ($klass->getBenutzer() === $this) {
                $klass->setBenutzer(null);
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
            $todo->setBenutzer($this);
        }

        return $this;
    }

    public function removeTodo(Todo $todo): self
    {
        if ($this->todos->contains($todo)) {
            $this->todos->removeElement($todo);
            // set the owning side to null (unless already changed)
            if ($todo->getBenutzer() === $this) {
                $todo->setBenutzer(null);
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
            $kalenderEintrag->setBenutzer($this);
        }

        return $this;
    }

    public function removeKalenderEintrag(KalenderEintrag $kalenderEintrag): self
    {
        if ($this->kalenderEintrags->contains($kalenderEintrag)) {
            $this->kalenderEintrags->removeElement($kalenderEintrag);
            // set the owning side to null (unless already changed)
            if ($kalenderEintrag->getBenutzer() === $this) {
                $kalenderEintrag->setBenutzer(null);
            }
        }

        return $this;
    }
}
