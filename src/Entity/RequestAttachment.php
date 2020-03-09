<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequestAttachmentRepository")
 */
class RequestAttachment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $approved;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RequestAttachmentType")
     */
    private $attachmentType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RequestProcessing", inversedBy="requestAttachments")
     */
    private $requestProcessing;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getApproved(): ?bool
    {
        return $this->approved;
    }

    public function setApproved(?bool $approved): self
    {
        $this->approved = $approved;

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

    public function getAttachmentType(): ?RequestAttachmentType
    {
        return $this->attachmentType;
    }

    public function setAttachmentType(?RequestAttachmentType $attachmentType): self
    {
        $this->attachmentType = $attachmentType;

        return $this;
    }

    public function getRequestProcessing(): ?RequestProcessing
    {
        return $this->requestProcessing;
    }

    public function setRequestProcessing(?RequestProcessing $requestProcessing): self
    {
        $this->requestProcessing = $requestProcessing;

        return $this;
    }

 
}
