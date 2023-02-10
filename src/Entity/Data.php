<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
#[ORM\MappedSuperclass]
abstract class Data
{
    #[ORM\Column]
    private ?float $value = null;

    #[ORM\Column]
    private ?float $nightValue = null;

    #[ORM\Column]
    private ?float $delta = null;

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getNightValue(): ?float
    {
        return $this->nightValue;
    }

    public function setNightValue(float $nightValue): self
    {
        $this->nightValue = $nightValue;

        return $this;
    }

    public function getDelta(): ?float
    {
        return $this->delta;
    }

    public function setDelta(float $delta): self
    {
        $this->delta = $delta;

        return $this;
    }
}
