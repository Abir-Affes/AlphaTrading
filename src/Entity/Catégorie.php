<?php

namespace App\Entity;

use App\Repository\CatégorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatégorieRepository::class)]
class Catégorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $désignation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDésignation(): ?string
    {
        return $this->désignation;
    }

    public function setDésignation(string $désignation): static
    {
        $this->désignation = $désignation;

        return $this;
    }
}
