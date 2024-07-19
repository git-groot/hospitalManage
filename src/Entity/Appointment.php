<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Scheduled_On = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Appointment_Date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Appointment_Time = null;

    #[ORM\ManyToOne]
    private ?Doctor $Doctor = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScheduledOn(): ?\DateTimeInterface
    {
        return $this->Scheduled_On;
    }

    public function setScheduledOn(?\DateTimeInterface $Scheduled_On): static
    {
        $this->Scheduled_On = $Scheduled_On;

        return $this;
    }

    public function getAppointmentDate(): ?\DateTimeInterface
    {
        return $this->Appointment_Date;
    }

    public function setAppointmentDate(?\DateTimeInterface $Appointment_Date): static
    {
        $this->Appointment_Date = $Appointment_Date;

        return $this;
    }

    public function getAppointmentTime(): ?\DateTimeInterface
    {
        return $this->Appointment_Time;
    }

    public function setAppointmentTime(?\DateTimeInterface $Appointment_Time): static
    {
        $this->Appointment_Time = $Appointment_Time;

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
