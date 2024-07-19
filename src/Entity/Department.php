<?php

namespace App\Entity;

use App\Repository\DepartmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartmentRepository::class)]
class Department
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Dept_Head = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Dept_Name = null;

    #[ORM\Column(nullable: true)]
    private ?int $Emp_Count = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeptHead(): ?string
    {
        return $this->Dept_Head;
    }

    public function setDeptHead(?string $Dept_Head): static
    {
        $this->Dept_Head = $Dept_Head;

        return $this;
    }

    public function getDeptName(): ?string
    {
        return $this->Dept_Name;
    }

    public function setDeptName(?string $Dept_Name): static
    {
        $this->Dept_Name = $Dept_Name;

        return $this;
    }

    public function getEmpCount(): ?int
    {
        return $this->Emp_Count;
    }

    public function setEmpCount(?int $Emp_Count): static
    {
        $this->Emp_Count = $Emp_Count;

        return $this;
    }
}
