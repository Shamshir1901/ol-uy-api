<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AdvertisementConvenienceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdvertisementConvenienceRepository::class)]
#[ApiResource]
class AdvertisementConvenience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Convenience $convenience = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Advertisement $advertisement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConvenience(): ?Convenience
    {
        return $this->convenience;
    }

    public function setConvenience(?Convenience $convenience): self
    {
        $this->convenience = $convenience;

        return $this;
    }

    public function getAdvertisement(): ?Advertisement
    {
        return $this->advertisement;
    }

    public function setAdvertisement(?Advertisement $advertisement): self
    {
        $this->advertisement = $advertisement;

        return $this;
    }
}
