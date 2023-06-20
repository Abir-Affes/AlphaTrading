<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $totale = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $Id_Client = null;

    #[ORM\ManyToMany(targetEntity: Article::class)]
    private Collection $Id_Article;

    public function __construct()
    {
        $this->Id_Article = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

 

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function getTotale(): ?string
    {
        return $this->totale;
    }

    public function getIdClient(): ?Utilisateur
    {
        return $this->Id_Client;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getIdArticle(): Collection
    {
        return $this->Id_Article;
    }

    public function addIdArticle(Article $idArticle): static
    {
        if (!$this->Id_Article->contains($idArticle)) {
            $this->Id_Article->add($idArticle);
        }

        return $this;
    }

    public function removeIdArticle(Article $idArticle): static
    {
        $this->Id_Article->removeElement($idArticle);

        return $this;
    }




}
