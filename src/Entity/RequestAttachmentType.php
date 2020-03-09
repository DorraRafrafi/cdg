<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequestAttachmentTypeRepository")
 */
class RequestAttachmentType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CreditOwnerTypes")
     */
    private $creditOwnerType;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_required;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RequestType")
     */
    private $requestType;

    /**
     * @ORM\Column(type="integer")
     */
    private $max;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDownloadable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreditOwnerType(): ?CreditOwnerTypes
    {
        return $this->creditOwnerType;
    }

    public function setCreditOwnerType(?CreditOwnerTypes $creditOwnerType): self
    {
        $this->creditOwnerType = $creditOwnerType;

        return $this;
    }

    public function getIsRequired(): ?bool
    {
        return $this->is_required;
    }

    public function setIsRequired(?bool $is_required): self
    {
        $this->is_required = $is_required;

        return $this;
    }

    public function getRequestType(): ?RequestType
    {
        return $this->requestType;
    }

    public function setRequestType(?RequestType $requestType): self
    {
        $this->requestType = $requestType;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getIsDownloadable(): ?bool
    {
        return $this->isDownloadable;
    }

    public function setIsDownloadable(bool $isDownloadable): self
    {
        $this->isDownloadable = $isDownloadable;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }
}
