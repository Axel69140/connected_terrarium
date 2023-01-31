<?php

namespace App\Entity;

use App\Repository\TerrariumRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TerrariumRepository::class)]
class Terrarium
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $luminosityLevel = null;

    #[ORM\Column]
    private ?float $minLuminosityLevel = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $nightHour = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dayHour = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $specimen = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Temperature $temperature = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Humidity $humidity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLuminosityLevel(): ?float
    {
        return $this->luminosityLevel;
    }

    public function setLuminosityLevel(float $luminosityLevel): self
    {
        $this->luminosityLevel = $luminosityLevel;

        return $this;
    }

    public function getMinLuminosityLevel(): ?float
    {
        return $this->minLuminosityLevel;
    }

    public function setMinLuminosityLevel(float $minLuminosityLevel): self
    {
        $this->minLuminosityLevel = $minLuminosityLevel;

        return $this;
    }

    public function getNightHour(): ?\DateTimeInterface
    {
        return $this->nightHour;
    }

    public function setNightHour(\DateTimeInterface $nightHour): self
    {
        $this->nightHour = $nightHour;

        return $this;
    }

    public function getDayHour(): ?\DateTimeInterface
    {
        return $this->dayHour;
    }

    public function setDayHour(\DateTimeInterface $dayHour): self
    {
        $this->dayHour = $dayHour;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSpecimen(): ?float
    {
        return $this->specimen;
    }

    public function setSpecimen(float $specimen): self
    {
        $this->specimen = $specimen;

        return $this;
    }

    public function getTemperature(): ?Temperature
    {
        return $this->temperature;
    }

    public function setTemperature(Temperature $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getHumidity(): ?Humidity
    {
        return $this->humidity;
    }

    public function setHumidity(?Humidity $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }
}
