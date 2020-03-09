<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CreditOwnerRepository")
 */
class CreditOwner
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
    private $ref;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CreditOwnerTypes")
     */
    private $type;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Request", inversedBy="creditOwners")
     */
    private $request;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CreditOwnerSearch", mappedBy="creditOwner")
     */
    private $creditOwnerSearcheFields;

    public function __construct()
    {
        $this->creditOwnerSearcheFields = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getType(): ?CreditOwnerTypes
    {
        return $this->type;
    }

    public function setType(?CreditOwnerTypes $type): self
    {
        $this->type = $type;

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

    public function getRequest(): ?Request
    {
        return $this->request;
    }

    public function setRequest(?Request $request): self
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return Collection|CreditOwnerSearch[]
     */
    public function getCreditOwnerSearcheFields(): Collection
    {
        return $this->creditOwnerSearcheFields;
    }

    public function addCreditOwnerSearcheField(CreditOwnerSearch $creditOwnerSearcheField): self
    {
        if (!$this->creditOwnerSearcheFields->contains($creditOwnerSearcheField)) {
            $this->creditOwnerSearcheFields[] = $creditOwnerSearcheField;
            $creditOwnerSearcheField->setCreditOwner($this);
        }

        return $this;
    }

    public function removeCreditOwnerSearcheField(CreditOwnerSearch $creditOwnerSearcheField): self
    {
        if ($this->creditOwnerSearcheFields->contains($creditOwnerSearcheField)) {
            $this->creditOwnerSearcheFields->removeElement($creditOwnerSearcheField);
            // set the owning side to null (unless already changed)
            if ($creditOwnerSearcheField->getCreditOwner() === $this) {
                $creditOwnerSearcheField->setCreditOwner(null);
            }
        }

        return $this;
    }
}
