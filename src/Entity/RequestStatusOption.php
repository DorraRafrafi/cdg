<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequestStatusOptionRepository")
 */
class RequestStatusOption
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
     * @ORM\ManyToOne(targetEntity="App\Entity\RequestStatus")
     */
    private $requestStatus;

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

    public function getRequestStatus(): ?RequestStatus
    {
        return $this->requestStatus;
    }

    public function setRequestStatus(?RequestStatus $requestStatus): self
    {
        $this->requestStatus = $requestStatus;

        return $this;
    }
}
