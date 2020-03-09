<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaymentRepository")
 */
class Payment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

   

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PaymentType")
     */
    private $paymentType;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PaymentInfo", mappedBy="payment")
     */
    private $paymentInfos;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Request", inversedBy="payments")
     */
    private $request;

    public function __construct()
    {
        $this->paymentInfos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getPaymentType(): ?PaymentType
    {
        return $this->paymentType;
    }

    public function setPaymentType(?PaymentType $paymentType): self
    {
        $this->paymentType = $paymentType;

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
     * @return Collection|PaymentInfo[]
     */
    public function getPaymentInfos(): Collection
    {
        return $this->paymentInfos;
    }

    public function addPaymentInfo(PaymentInfo $paymentInfo): self
    {
        if (!$this->paymentInfos->contains($paymentInfo)) {
            $this->paymentInfos[] = $paymentInfo;
            $paymentInfo->setPayment($this);
        }

        return $this;
    }

    public function removePaymentInfo(PaymentInfo $paymentInfo): self
    {
        if ($this->paymentInfos->contains($paymentInfo)) {
            $this->paymentInfos->removeElement($paymentInfo);
            // set the owning side to null (unless already changed)
            if ($paymentInfo->getPayment() === $this) {
                $paymentInfo->setPayment(null);
            }
        }

        return $this;
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
}
