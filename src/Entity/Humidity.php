<?php

namespace App\Entity;

use App\Repository\HumidityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HumidityRepository::class)]
class Humidity extends Data
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
