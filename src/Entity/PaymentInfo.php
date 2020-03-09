<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaymentInfoRepository")
 */
class PaymentInfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

  

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PaymentField")
     */
    private $paymentField;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Payment", inversedBy="paymentInfos")
     */
    private $payment;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getPaymentField(): ?PaymentField
    {
        return $this->paymentField;
    }

    public function setPaymentField(?PaymentField $paymentField): self
    {
        $this->paymentField = $paymentField;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    public function setPayment(?Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }
}
