<?php

namespace App\Entity;

use App\Repository\MedicineRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicineRepository::class)]
class Medicine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $M_Name = null;

    #[ORM\Column(nullable: true)]
    private ?int $M_Quantity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $M_Cost = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMName(): ?string
    {
        return $this->M_Name;
    }

    public function setMName(?string $M_Name): static
    {
        $this->M_Name = $M_Name;

        return $this;
    }

    public function getMQuantity(): ?int
    {
        return $this->M_Quantity;
    }

    public function setMQuantity(?int $M_Quantity): static
    {
        $this->M_Quantity = $M_Quantity;

        return $this;
    }

    public function getMCost(): ?string
    {
        return $this->M_Cost;
    }

    public function setMCost(?string $M_Cost): static
    {
        $this->M_Cost = $M_Cost;

        return $this;
    }
}
