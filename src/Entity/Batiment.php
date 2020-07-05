<?php

namespace App\Entity;

use App\Repository\BatimentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BatimentRepository::class)
 */
class Batiment
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
    private $numbat;

    public function getId(): ?int
    {
        return $this->id;
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
}
