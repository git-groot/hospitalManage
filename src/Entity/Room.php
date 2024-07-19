<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
class Room
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Room_Type = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Room_Cost = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomType(): ?string
    {
        return $this->Room_Type;
    }

    public function setRoomType(?string $Room_Type): static
    {
        $this->Room_Type = $Room_Type;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->Patient;
    }

    public function setPatient(?Patient $Patient): static
    {
        $this->Patient = $Patient;

        return $this;
    }

    public function getRoomCost(): ?string
    {
        return $this->Room_Cost;
    }

    public function setRoomCost(?string $Room_Cost): static
    {
        $this->Room_Cost = $Room_Cost;

        return $this;
    }
}
