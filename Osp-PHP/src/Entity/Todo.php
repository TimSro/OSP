<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TodoRepository")
 */
class Todo
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
    private $todoString;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $todoKey;

    /**
     * @ORM\Column(type="boolean")
     */
    private $erledigt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Benutzer", inversedBy="todos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $benutzer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Klasse", inversedBy="todos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $klasse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Fach", inversedBy="todos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fach;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTodoString(): ?string
    {
        return $this->todoString;
    }

    public function setTodoString(string $todoString): self
    {
        $this->todoString = $todoString;

        return $this;
    }

    public function getTodoKey(): ?string
    {
        return $this->todoKey;
    }

    public function setTodoKey(string $todoKey): self
    {
        $this->todoKey = $todoKey;

        return $this;
    }

    public function getErledigt(): ?bool
    {
        return $this->erledigt;
    }

    public function setErledigt(bool $erledigt): self
    {
        $this->erledigt = $erledigt;

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

    public function getKlasse(): ?Klasse
    {
        return $this->klasse;
    }

    public function setKlasse(?Klasse $klasse): self
    {
        $this->klasse = $klasse;

        return $this;
    }

    public function getFach(): ?Fach
    {
        return $this->fach;
    }

    public function setFach(?Fach $fach): self
    {
        $this->fach = $fach;

        return $this;
    }
}
