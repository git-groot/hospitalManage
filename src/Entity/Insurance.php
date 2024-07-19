<?php

namespace App\Entity;

use App\Repository\InsuranceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InsuranceRepository::class)]
class Insurance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Policy_Number = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Ins_Code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $End_Date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Provider = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Plan = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Co_Pay = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Coverage = null;

    #[ORM\Column(nullable: true)]
    private ?bool $Maternity = null;

    #[ORM\Column]
    private ?bool $Dental = null;

    #[ORM\Column(nullable: true)]
    private ?bool $Optical = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPolicyNumber(): ?string
    {
        return $this->Policy_Number;
    }

    public function setPolicyNumber(?string $Policy_Number): static
    {
        $this->Policy_Number = $Policy_Number;

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

    public function getInsCode(): ?string
    {
        return $this->Ins_Code;
    }

    public function setInsCode(?string $Ins_Code): static
    {
        $this->Ins_Code = $Ins_Code;

        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->End_Date;
    }

    public function setEndDate(?string $End_Date): static
    {
        $this->End_Date = $End_Date;

        return $this;
    }

    public function getProvider(): ?string
    {
        return $this->Provider;
    }

    public function setProvider(?string $Provider): static
    {
        $this->Provider = $Provider;

        return $this;
    }

    public function getPlan(): ?string
    {
        return $this->Plan;
    }

    public function setPlan(?string $Plan): static
    {
        $this->Plan = $Plan;

        return $this;
    }

    public function getCoPay(): ?string
    {
        return $this->Co_Pay;
    }

    public function setCoPay(?string $Co_Pay): static
    {
        $this->Co_Pay = $Co_Pay;

        return $this;
    }

    public function getCoverage(): ?string
    {
        return $this->Coverage;
    }

    public function setCoverage(?string $Coverage): static
    {
        $this->Coverage = $Coverage;

        return $this;
    }

    public function isMaternity(): ?bool
    {
        return $this->Maternity;
    }

    public function setMaternity(?bool $Maternity): static
    {
        $this->Maternity = $Maternity;

        return $this;
    }

    public function isDental(): ?bool
    {
        return $this->Dental;
    }

    public function setDental(bool $Dental): static
    {
        $this->Dental = $Dental;

        return $this;
    }

    public function isOptical(): ?bool
    {
        return $this->Optical;
    }

    public function setOptical(?bool $Optical): static
    {
        $this->Optical = $Optical;

        return $this;
    }
}
