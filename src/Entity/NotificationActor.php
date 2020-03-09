<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NotificationActorRepository")
 */
class NotificationActor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\NotificationObject")
     */
    private $notificationObject;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $actor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNotificationObject(): ?NotificationObject
    {
        return $this->notificationObject;
    }

    public function setNotificationObject(?NotificationObject $notificationObject): self
    {
        $this->notificationObject = $notificationObject;

        return $this;
    }

    public function getActor(): ?User
    {
        return $this->actor;
    }

    public function setActor(?User $actor): self
    {
        $this->actor = $actor;

        return $this;
    }
}
