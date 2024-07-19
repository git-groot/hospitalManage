<?php

namespace App\Entity;

use App\Repository\LabScreeningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LabScreeningRepository::class)]
class LabScreening
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    #[ORM\ManyToOne]
    private ?Staff $Technician = null;

    #[ORM\ManyToOne]
    private ?Doctor $Doctor = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Test_Cost = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTechnician(): ?Staff
    {
        return $this->Technician;
    }

    public function setTechnician(?Staff $Technician): static
    {
        $this->Technician = $Technician;

        return $this;
    }

    public function getDoctor(): ?Doctor
    {
        return $this->Doctor;
    }

    public function setDoctor(?Doctor $Doctor): static
    {
        $this->Doctor = $Doctor;

        return $this;
    }

    public function getTestCost(): ?string
    {
        return $this->Test_Cost;
    }

    public function setTestCost(?string $Test_Cost): static
    {
        $this->Test_Cost = $Test_Cost;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): static
    {
        $this->Date = $Date;

        return $this;
    }
}
