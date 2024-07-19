<?php

namespace App\Entity;

use App\Repository\DoctorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DoctorRepository::class)]
class Doctor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Qualifications = null;

    #[ORM\ManyToOne]
    private ?Staff $Employe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Specialization = null;

    #[ORM\ManyToOne]
    private ?Department $Department = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQualifications(): ?string
    {
        return $this->Qualifications;
    }

    public function setQualifications(?string $Qualifications): static
    {
        $this->Qualifications = $Qualifications;

        return $this;
    }

    public function getEmploye(): ?Staff
    {
        return $this->Employe;
    }

    public function setEmploye(?Staff $Employe): static
    {
        $this->Employe = $Employe;

        return $this;
    }

    public function getSpecialization(): ?string
    {
        return $this->Specialization;
    }

    public function setSpecialization(?string $Specialization): static
    {
        $this->Specialization = $Specialization;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->Department;
    }

    public function setDepartment(?Department $Department): static
    {
        $this->Department = $Department;

        return $this;
    }
}
