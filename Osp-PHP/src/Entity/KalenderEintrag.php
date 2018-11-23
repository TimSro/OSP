<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KalenderEintragRepository")
 */
class KalenderEintrag
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $kalenderKey;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notiz;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Benutzer", inversedBy="kalenderEintrags")
     * @ORM\JoinColumn(nullable=false)
     */
    private $benutzer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Klasse", inversedBy="kalenderEintrags")
     * @ORM\JoinColumn(nullable=false)
     */
    private $klasse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Fach", inversedBy="kalenderEintrags")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fach;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getKalenderKey(): ?string
    {
        return $this->kalenderKey;
    }

    public function setKalenderKey(string $kalenderKey): self
    {
        $this->kalenderKey = $kalenderKey;

        return $this;
    }

    public function getNotiz(): ?string
    {
        return $this->notiz;
    }

    public function setNotiz(string $notiz): self
    {
        $this->notiz = $notiz;

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
