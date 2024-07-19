<?php

namespace App\Entity;

use App\Repository\StaffRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StaffRepository::class)]
class Staff
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Employe_FName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Employe_LName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_of_Joining = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_of_Seperation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Employe_Type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Address = null;

    #[ORM\ManyToOne]
    private ?Department $Department = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $AadharNumber = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeFName(): ?string
    {
        return $this->Employe_FName;
    }

    public function setEmployeFName(?string $Employe_FName): static
    {
        $this->Employe_FName = $Employe_FName;

        return $this;
    }

    public function getEmployeLName(): ?string
    {
        return $this->Employe_LName;
    }

    public function setEmployeLName(?string $Employe_LName): static
    {
        $this->Employe_LName = $Employe_LName;

        return $this;
    }

    public function getDateOfJoining(): ?\DateTimeInterface
    {
        return $this->Date_of_Joining;
    }

    public function setDateOfJoining(?\DateTimeInterface $Date_of_Joining): static
    {
        $this->Date_of_Joining = $Date_of_Joining;

        return $this;
    }

    public function getDateOfSeperation(): ?\DateTimeInterface
    {
        return $this->Date_of_Seperation;
    }

    public function setDateOfSeperation(?\DateTimeInterface $Date_of_Seperation): static
    {
        $this->Date_of_Seperation = $Date_of_Seperation;

        return $this;
    }

    public function getEmployeType(): ?string
    {
        return $this->Employe_Type;
    }

    public function setEmployeType(?string $Employe_Type): static
    {
        $this->Employe_Type = $Employe_Type;

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

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(?string $Address): static
    {
        $this->Address = $Address;

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

    public function getAadharNumber(): ?string
    {
        return $this->AadharNumber;
    }

    public function setAadharNumber(?string $AadharNumber): static
    {
        $this->AadharNumber = $AadharNumber;

        return $this;
    }
}
