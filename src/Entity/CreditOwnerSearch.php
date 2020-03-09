<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CreditOwnerSearchRepository")
 */
class CreditOwnerSearch
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
    private $value;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $creditOwnerFoundBy;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $creditOwnerDataIdentifier;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CreditOwner", inversedBy="creditOwnerSearcheFields")
     */
    private $creditOwner;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CreditOwnerField")
     */
    private $creditOwnerField;

    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getCreditOwnerFoundBy(): ?bool
    {
        return $this->creditOwnerFoundBy;
    }

    public function setCreditOwnerFoundBy(?bool $creditOwnerFoundBy): self
    {
        $this->creditOwnerFoundBy = $creditOwnerFoundBy;

        return $this;
    }

    public function getCreditOwnerDataIdentifier(): ?string
    {
        return $this->creditOwnerDataIdentifier;
    }

    public function setCreditOwnerDataIdentifier(?string $creditOwnerDataIdentifier): self
    {
        $this->creditOwnerDataIdentifier = $creditOwnerDataIdentifier;

        return $this;
    }

    public function getCreditOwner(): ?CreditOwner
    {
        return $this->creditOwner;
    }

    public function setCreditOwner(?CreditOwner $creditOwner): self
    {
        $this->creditOwner = $creditOwner;

        return $this;
    }

    public function getCreditOwnerField(): ?CreditOwnerField
    {
        return $this->creditOwnerField;
    }

    public function setCreditOwnerField(?CreditOwnerField $creditOwnerField): self
    {
        $this->creditOwnerField = $creditOwnerField;

        return $this;
    }
}
