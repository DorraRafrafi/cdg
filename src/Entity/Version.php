<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VersionRepository")
 */
class Version
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
    private $operating_system;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $current_version;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $min_version;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cache_clear;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOperatingSystem(): ?string
    {
        return $this->operating_system;
    }

    public function setOperatingSystem(string $operating_system): self
    {
        $this->operating_system = $operating_system;

        return $this;
    }

    public function getCurrentVersion(): ?string
    {
        return $this->current_version;
    }

    public function setCurrentVersion(string $current_version): self
    {
        $this->current_version = $current_version;

        return $this;
    }

    public function getMinVersion(): ?string
    {
        return $this->min_version;
    }

    public function setMinVersion(string $min_version): self
    {
        $this->min_version = $min_version;

        return $this;
    }

    public function getCacheClear(): ?bool
    {
        return $this->cache_clear;
    }

    public function setCacheClear(?bool $cache_clear): self
    {
        $this->cache_clear = $cache_clear;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }
}
