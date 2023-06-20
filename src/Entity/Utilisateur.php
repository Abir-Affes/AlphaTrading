<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $num_tel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rôle = null;


    public function getNom(): ?string
    {
        return $this->nom;
    }

    

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }



    public function getRôle(): ?string
    {
        return $this->rôle;
    }

    public function setRôle(?string $rôle): static
    {
        $this->rôle = $rôle;

        return $this;
    }
}
