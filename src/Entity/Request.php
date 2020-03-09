<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequestRepository")
 */
class Request
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RequestType")
     */
    private $requestType;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CreditOwner", mappedBy="request")
     */
    private $creditOwners;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $canal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RequestStatus")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Language")
     */
    private $lang;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CreditOwnerTypeOption")
     */
    private $creditOwnerTypeOption;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Payment", mappedBy="request")
     */
    private $payments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RequestStatusHistory", mappedBy="request")
     */
    private $requestStatusHistoryList;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RequestStatusOption")
     */
    private $requestStatusOption;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $requester;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $lockedBy;

    public function __construct()
    {
        $this->creditOwners = new ArrayCollection();
        $this->payments = new ArrayCollection();
        $this->requestStatusHistoryList = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|CreditOwner[]
     */
    public function getCreditOwners(): Collection
    {
        return $this->creditOwners;
    }

    public function addCreditOwner(CreditOwner $creditOwner): self
    {
        if (!$this->creditOwners->contains($creditOwner)) {
            $this->creditOwners[] = $creditOwner;
            $creditOwner->setRequest($this);
        }

        return $this;
    }

    public function removeCreditOwner(CreditOwner $creditOwner): self
    {
        if ($this->creditOwners->contains($creditOwner)) {
            $this->creditOwners->removeElement($creditOwner);
            // set the owning side to null (unless already changed)
            if ($creditOwner->getRequest() === $this) {
                $creditOwner->setRequest(null);
            }
        }

        return $this;
    }

    public function getCanal(): ?string
    {
        return $this->canal;
    }

    public function setCanal(?string $canal): self
    {
        $this->canal = $canal;

        return $this;
    }

    public function getStatus(): ?RequestStatus
    {
        return $this->status;
    }

    public function setStatus(?RequestStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLang(): ?Language
    {
        return $this->lang;
    }

    public function setLang(?Language $lang): self
    {
        $this->lang = $lang;

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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getCreditOwnerTypeOption(): ?CreditOwnerTypeOption
    {
        return $this->creditOwnerTypeOption;
    }

    public function setCreditOwnerTypeOption(?CreditOwnerTypeOption $creditOwnerTypeOption): self
    {
        $this->creditOwnerTypeOption = $creditOwnerTypeOption;

        return $this;
    }

    /**
     * @return Collection|Payment[]
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): self
    {
        if (!$this->payments->contains($payment)) {
            $this->payments[] = $payment;
            $payment->setRequest($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): self
    {
        if ($this->payments->contains($payment)) {
            $this->payments->removeElement($payment);
            // set the owning side to null (unless already changed)
            if ($payment->getRequest() === $this) {
                $payment->setRequest(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RequestStatusHistory[]
     */
    public function getRequestStatusHistoryList(): Collection
    {
        return $this->requestStatusHistoryList;
    }

    public function addRequestStatusHistoryList(RequestStatusHistory $requestStatusHistoryList): self
    {
        if (!$this->requestStatusHistoryList->contains($requestStatusHistoryList)) {
            $this->requestStatusHistoryList[] = $requestStatusHistoryList;
            $requestStatusHistoryList->setRequest($this);
        }

        return $this;
    }

    public function removeRequestStatusHistoryList(RequestStatusHistory $requestStatusHistoryList): self
    {
        if ($this->requestStatusHistoryList->contains($requestStatusHistoryList)) {
            $this->requestStatusHistoryList->removeElement($requestStatusHistoryList);
            // set the owning side to null (unless already changed)
            if ($requestStatusHistoryList->getRequest() === $this) {
                $requestStatusHistoryList->setRequest(null);
            }
        }

        return $this;
    }

    public function getRequestStatusOption(): ?RequestStatusOption
    {
        return $this->requestStatusOption;
    }

    public function setRequestStatusOption(?RequestStatusOption $requestStatusOption): self
    {
        $this->requestStatusOption = $requestStatusOption;

        return $this;
    }

    public function getRequester(): ?User
    {
        return $this->requester;
    }

    public function setRequester(?User $requester): self
    {
        $this->requester = $requester;

        return $this;
    }

    public function getLockedBy(): ?User
    {
        return $this->lockedBy;
    }

    public function setLockedBy(?User $lockedBy): self
    {
        $this->lockedBy = $lockedBy;

        return $this;
    }
}
