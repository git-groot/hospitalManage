<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Patient_FName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Patient_LName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Blood_group = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Gender = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Patient_Condition = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Admission_Date = null;
    private $addDate;
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Discharge_Date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatientFName(): ?string
    {
        return $this->Patient_FName;
    }

    public function setPatientFName(?string $Patient_FName): static
    {
        $this->Patient_FName = $Patient_FName;

        return $this;
    }

    public function getPatientLName(): ?string
    {
        return $this->Patient_LName;
    }

    public function setPatientLName(?string $Patient_LName): static
    {
        $this->Patient_LName = $Patient_LName;

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

    public function getBloodGroup(): ?string
    {
        return $this->Blood_group;
    }

    public function setBloodGroup(?string $Blood_group): static
    {
        $this->Blood_group = $Blood_group;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->Gender;
    }

    public function setGender(?string $Gender): static
    {
        $this->Gender = $Gender;

        return $this;
    }

    public function getPatientCondition(): ?string
    {
        return $this->Patient_Condition;
    }

    public function setPatientCondition(?string $Patient_Condition): static
    {
        $this->Patient_Condition = $Patient_Condition;

        return $this;
    }

    public function getAdmissionDate(): ?\DateTimeInterface
    {
        return $this->Admission_Date;
    }

    public function setAdmissionDate(?\DateTimeInterface $Admission_Date): static
    {
        $this->Admission_Date = $Admission_Date;

        return $this;
    }
    public function getAddDate(): ?string
    {
        return $this->addDate;
    }

    public function setAddDate(?string $addDate): static
    {
        $this->addDate = $addDate;

        return $this;
    }

    public function getDischargeDate(): ?\DateTimeInterface
    {
        return $this->Discharge_Date;
    }

    public function setDischargeDate(?\DateTimeInterface $Discharge_Date): static
    {
        $this->Discharge_Date = $Discharge_Date;

        return $this;
    }
}
