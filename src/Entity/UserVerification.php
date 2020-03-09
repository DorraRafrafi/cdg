<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserVerificationRepository")
 */
class UserVerification
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sms_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email_token;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getSmsCode(): ?string
    {
        return $this->sms_code;
    }

    public function setSmsCode(?string $sms_code): self
    {
        $this->sms_code = $sms_code;

        return $this;
    }

    public function getEmailToken(): ?string
    {
        return $this->email_token;
    }

    public function setEmailToken(?string $email_token): self
    {
        $this->email_token = $email_token;

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
}
