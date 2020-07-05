<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numchbr;

    /**
     * @ORM\Column(type="integer")
     */
    private $numbat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumchbr(): ?int
    {
        return $this->numchbr;
    }

    public function setNumchbr(int $numchbr): self
    {
        $this->numchbr = $numchbr;

        return $this;
    }

    public function getNumbat(): ?int
    {
        return $this->numbat;
    }

    public function setNumbat(int $numbat): self
    {
        $this->numbat = $numbat;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
