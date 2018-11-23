<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SchuelerRepository")
 */
class Schueler
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Klasse", inversedBy="schuelers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $klasse;

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

    public function getKlasse(): ?Klasse
    {
        return $this->klasse;
    }

    public function setKlasse(?Klasse $klasse): self
    {
        $this->klasse = $klasse;

        return $this;
    }
}
