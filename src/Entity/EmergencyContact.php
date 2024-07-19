<?php

namespace App\Entity;

use App\Repository\EmergencyContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmergencyContactRepository::class)]
class EmergencyContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Contact_Name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Relation = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContactName(): ?string
    {
        return $this->Contact_Name;
    }

    public function setContactName(?string $Contact_Name): static
    {
        $this->Contact_Name = $Contact_Name;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): static
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getRelation(): ?string
    {
        return $this->Relation;
    }

    public function setRelation(?string $Relation): static
    {
        $this->Relation = $Relation;

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
}
