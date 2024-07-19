<?php

namespace App\Entity;

use App\Repository\NurseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NurseRepository::class)]
class Nurse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    #[ORM\ManyToOne]
    private ?Staff $staff = null;

    #[ORM\ManyToOne]
    private ?Department $Department = null;

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

    public function getStaff(): ?Staff
    {
        return $this->staff;
    }

    public function setStaff(?Staff $staff): static
    {
        $this->staff = $staff;

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
