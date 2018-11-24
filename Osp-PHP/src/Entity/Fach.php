<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FachRepository")
 */
class Fach
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
     * @ORM\OneToMany(targetEntity="App\Entity\Todo", mappedBy="fach")
     */
    private $todos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\KalenderEintrag", mappedBy="fach")
     */
    private $kalenderEintrags;

    public function __construct()
    {
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
            $todo->setFach($this);
        }

        return $this;
    }

    public function removeTodo(Todo $todo): self
    {
        if ($this->todos->contains($todo)) {
            $this->todos->removeElement($todo);
            // set the owning side to null (unless already changed)
            if ($todo->getFach() === $this) {
                $todo->setFach(null);
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
            $kalenderEintrag->setFach($this);
        }

        return $this;
    }

    public function removeKalenderEintrag(KalenderEintrag $kalenderEintrag): self
    {
        if ($this->kalenderEintrags->contains($kalenderEintrag)) {
            $this->kalenderEintrags->removeElement($kalenderEintrag);
            // set the owning side to null (unless already changed)
            if ($kalenderEintrag->getFach() === $this) {
                $kalenderEintrag->setFach(null);
            }
        }

        return $this;
    }
}
