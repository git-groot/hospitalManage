<?php

namespace App\Entity;

use App\Repository\BillRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BillRepository::class)]
class Bill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\ManyToOne]
    private ?Room $Room_Cost = null;

    #[ORM\ManyToOne]
    private ?LabScreening $Test_Cost = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Other_Charges = null;

    #[ORM\ManyToOne]
    private ?Medicine $MedicineCost = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Total = null;

    #[ORM\ManyToOne]
    private ?Patient $Patient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Remaining_Balance = null;

    #[ORM\ManyToOne]
    private ?Insurance $PolicyNO = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRoomCost(): ?Room
    {
        return $this->Room_Cost;
    }

    public function setRoomCost(?Room $Room_Cost): static
    {
        $this->Room_Cost = $Room_Cost;

        return $this;
    }

    public function getTestCost(): ?LabScreening
    {
        return $this->Test_Cost;
    }

    public function setTestCost(?LabScreening $Test_Cost): static
    {
        $this->Test_Cost = $Test_Cost;

        return $this;
    }

    public function getOtherCharges(): ?string
    {
        return $this->Other_Charges;
    }

    public function setOtherCharges(?string $Other_Charges): static
    {
        $this->Other_Charges = $Other_Charges;

        return $this;
    }

    public function getMedicineCost(): ?Medicine
    {
        return $this->MedicineCost;
    }

    public function setMedicineCost(?Medicine $MedicineCost): static
    {
        $this->MedicineCost = $MedicineCost;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->Total;
    }

    public function setTotal(?string $Total): static
    {
        $this->Total = $Total;

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

    public function getRemainingBalance(): ?string
    {
        return $this->Remaining_Balance;
    }

    public function setRemainingBalance(?string $Remaining_Balance): static
    {
        $this->Remaining_Balance = $Remaining_Balance;

        return $this;
    }

    public function getPolicyNO(): ?Insurance
    {
        return $this->PolicyNO;
    }

    public function setPolicyNO(?Insurance $PolicyNO): static
    {
        $this->PolicyNO = $PolicyNO;

        return $this;
    }
}
