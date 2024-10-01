<?php

namespace App\Entity;

use App\Repository\TypeBonbonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeBonbonRepository::class)]
class TypeBonbon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $TypeBonbon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeBonbon(): ?string
    {
        return $this->TypeBonbon;
    }

    public function setTypeBonbon(string $TypeBonbon): static
    {
        $this->TypeBonbon = $TypeBonbon;

        return $this;
    }
}
