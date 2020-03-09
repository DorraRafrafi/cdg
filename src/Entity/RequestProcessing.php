<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequestProcessingRepository")
 */
class RequestProcessing
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Request")
     */
    private $request;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $processedBy;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RequestAttachment", mappedBy="requestProcessing")
     */
    private $requestAttachments;

    public function __construct()
    {
        $this->requestAttachments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequest(): ?Request
    {
        return $this->request;
    }

    public function setRequest(?Request $request): self
    {
        $this->request = $request;

        return $this;
    }

    public function getProcessedBy(): ?User
    {
        return $this->processedBy;
    }

    public function setProcessedBy(?User $processedBy): self
    {
        $this->processedBy = $processedBy;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

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

    /**
     * @return Collection|RequestAttachment[]
     */
    public function getRequestAttachments(): Collection
    {
        return $this->requestAttachments;
    }

    public function addRequestAttachment(RequestAttachment $requestAttachment): self
    {
        if (!$this->requestAttachments->contains($requestAttachment)) {
            $this->requestAttachments[] = $requestAttachment;
            $requestAttachment->setRequestProcessing($this);
        }

        return $this;
    }

    public function removeRequestAttachment(RequestAttachment $requestAttachment): self
    {
        if ($this->requestAttachments->contains($requestAttachment)) {
            $this->requestAttachments->removeElement($requestAttachment);
            // set the owning side to null (unless already changed)
            if ($requestAttachment->getRequestProcessing() === $this) {
                $requestAttachment->setRequestProcessing(null);
            }
        }

        return $this;
    }
}
