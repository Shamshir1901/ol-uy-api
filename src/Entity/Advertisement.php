<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AdvertisementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdvertisementRepository::class)]
#[ApiResource]
class Advertisement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?MediaObject $image = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $countRooms = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $countFloor = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $currentFloor = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $allFloor = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $size = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $liveSize = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $price = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?City $city = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getImage(): ?MediaObject
    {
        return $this->image;
    }

    public function setImage(?MediaObject $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCountRooms(): ?int
    {
        return $this->countRooms;
    }

    public function setCountRooms(int $countRooms): self
    {
        $this->countRooms = $countRooms;

        return $this;
    }

    public function getCountFloor(): ?int
    {
        return $this->countFloor;
    }

    public function setCountFloor(int $countFloor): self
    {
        $this->countFloor = $countFloor;

        return $this;
    }

    public function getCurrentFloor(): ?int
    {
        return $this->currentFloor;
    }

    public function setCurrentFloor(?int $currentFloor): self
    {
        $this->currentFloor = $currentFloor;

        return $this;
    }

    public function getAllFloor(): ?int
    {
        return $this->allFloor;
    }

    public function setAllFloor(?int $allFloor): self
    {
        $this->allFloor = $allFloor;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getLiveSize(): ?int
    {
        return $this->liveSize;
    }

    public function setLiveSize(?int $liveSize): self
    {
        $this->liveSize = $liveSize;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
