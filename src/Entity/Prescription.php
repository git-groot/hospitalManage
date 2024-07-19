<?php

namespace App\Entity;

use App\Repository\PrescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrescriptionRepository::class)]
class Prescription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    #[ORM\ManyToOne]
    private ?Medicine $Medicine = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column]
    private ?int $Dosage = null;

    #[ORM\ManyToOne]
    private ?Doctor $Doctor = null;

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

    public function getMedicine(): ?Medicine
    {
        return $this->Medicine;
    }

    public function setMedicine(?Medicine $Medicine): static
    {
        $this->Medicine = $Medicine;

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

    public function getDosage(): ?int
    {
        return $this->Dosage;
    }

    public function setDosage(int $Dosage): static
    {
        $this->Dosage = $Dosage;

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
}
