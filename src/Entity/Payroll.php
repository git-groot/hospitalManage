<?php

namespace App\Entity;

use App\Repository\PayrollRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PayrollRepository::class)]
class Payroll
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Account_No = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Salary = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Bonus = null;

    #[ORM\ManyToOne]
    private ?Staff $staff = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $IBA_Number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountNo(): ?string
    {
        return $this->Account_No;
    }

    public function setAccountNo(?string $Account_No): static
    {
        $this->Account_No = $Account_No;

        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->Salary;
    }

    public function setSalary(?string $Salary): static
    {
        $this->Salary = $Salary;

        return $this;
    }

    public function getBonus(): ?string
    {
        return $this->Bonus;
    }

    public function setBonus(?string $Bonus): static
    {
        $this->Bonus = $Bonus;

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

    public function getIBANumber(): ?string
    {
        return $this->IBA_Number;
    }

    public function setIBANumber(?string $IBA_Number): static
    {
        $this->IBA_Number = $IBA_Number;

        return $this;
    }
}
