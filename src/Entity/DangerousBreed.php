<?php

namespace App\Entity;

use App\Repository\DangerousBreedRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DangerousBreedRepository::class)]
class DangerousBreed
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $petTypeId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPetTypeId(): ?int
    {
        return $this->petTypeId;
    }

    public function setPetTypeId(int $petTypeId): static
    {
        $this->petTypeId = $petTypeId;

        return $this;
    }
}
