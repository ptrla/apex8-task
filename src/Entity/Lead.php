<?php

namespace App\Entity;

use App\Entity\Shared\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: '`lead`')]
#[ORM\HasLifecycleCallbacks]
class Lead
{
    use TimestampableTrait;

    public const TYPE_FUEL_PETROL = 'PETROL';
    public const TYPE_FUEL_DIESEL = 'DIESEL';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $postcode = null;

    #[ORM\Column(length: 10)]
    private ?string $reg = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 4)]
    private ?string $date = null;

    #[ORM\Column(length: 5)]
    private ?string $cylinder = null;

    #[ORM\Column(length: 20)]
    private ?string $color = null;

    #[ORM\Column(length: 255)]
    private ?string $keepers = null;

    #[ORM\Column(length: 20)]
    private ?string $contact = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 20)]
    private ?string $fuel = null;

    #[ORM\Column(length: 20)]
    private ?string $trans = null;

    #[ORM\Column(length: 2)]
    private ?string $doors = null;

    #[ORM\Column(length: 10)]
    private ?string $motDue = null;

    #[ORM\Column(length: 255)]
    private ?string $leadId = null;

    #[ORM\Column(length: 255)]
    private ?string $vin = null;

    #[ORM\Column]
    private ?bool $isScrap = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getReg(): ?string
    {
        return $this->reg;
    }

    public function setReg(string $reg): self
    {
        $this->reg = $reg;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCylinder(): ?string
    {
        return $this->cylinder;
    }

    public function setCylinder(string $cylinder): self
    {
        $this->cylinder = $cylinder;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getKeepers(): ?string
    {
        return $this->keepers;
    }

    public function setKeepers(string $keepers): self
    {
        $this->keepers = $keepers;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getTrans(): ?string
    {
        return $this->trans;
    }

    public function setTrans(string $trans): self
    {
        $this->trans = $trans;

        return $this;
    }

    public function getDoors(): ?string
    {
        return $this->doors;
    }

    public function setDoors(string $doors): self
    {
        $this->doors = $doors;

        return $this;
    }

    public function getMotDue(): ?string
    {
        return $this->motDue;
    }

    public function setMotDue(string $motDue): self
    {
        $this->motDue = $motDue;

        return $this;
    }

    public function getLeadId(): ?string
    {
        return $this->leadId;
    }

    public function setLeadId(string $leadId): self
    {
        $this->leadId = $leadId;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function isScrap(): ?bool
    {
        return $this->isScrap;
    }

    public function setIsScrap(bool $isScrap): self
    {
        $this->isScrap = $isScrap;

        return $this;
    }
}
