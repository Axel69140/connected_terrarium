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
    private ?float $minLuminosityLevel = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Temperature $temperature = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Humidity $humidity = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $specimen = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $hourDay = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $hourNight = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getSpecimen(): ?string
    {
        return $this->specimen;
    }

    public function setSpecimen(string $specimen): self
    {
        $this->specimen = $specimen;

        return $this;
    }

    public function getHourDay(): ?\DateTimeInterface
    {
        return $this->hourDay;
    }

    public function setHourDay(\DateTimeInterface $hourDay): self
    {
        $this->hourDay = $hourDay;

        return $this;
    }

    public function getHourNight(): ?\DateTimeInterface
    {
        return $this->hourNight;
    }

    public function setHourNight(\DateTimeInterface $hourNight): self
    {
        $this->hourNight = $hourNight;

        return $this;
    }

}
