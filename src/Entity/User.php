<?php

namespace App\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends BaseUser
{
    //user
      /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected  $token;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $telephone;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $email_verified;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nationality;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $birthday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $zip_code;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $telephone_verified;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $failed_attempts;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $last_failed_attempt_at;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $api_token;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UsersGender")
     */
    protected $gender;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\SmsVerification", cascade={"persist", "remove"})
     */
    protected $smsVerification;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Testimony", mappedBy="user")
     */
    protected $testimonies;

    public function __construct()
    {
        $this->testimonies = new ArrayCollection();
    }

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmailVerified(): ?int
    {
        return $this->email_verified;
    }

    public function setEmailVerified(int $email_verified): self
    {
        $this->email_verified = $email_verified;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(?string $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getTelephoneVerified(): ?int
    {
        return $this->telephone_verified;
    }

    public function setTelephoneVerified(int $telephone_verified): self
    {
        $this->telephone_verified = $telephone_verified;

        return $this;
    }

    public function getFailedAttempts(): ?int
    {
        return $this->failed_attempts;
    }

    public function setFailedAttempts(int $failed_attempts): self
    {
        $this->failed_attempts = $failed_attempts;

        return $this;
    }

    public function getLastFailedAttemptAt(): ?\DateTimeInterface
    {
        return $this->last_failed_attempt_at;
    }

    public function setLastFailedAttemptAt(?\DateTimeInterface $last_failed_attempt_at): self
    {
        $this->last_failed_attempt_at = $last_failed_attempt_at;

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

    public function getApiToken(): ?string
    {
        return $this->api_token;
    }

    public function setApiToken(?string $api_token): self
    {
        $this->api_token = $api_token;

        return $this;
    }

    public function getGender(): ?UsersGender
    {
        return $this->gender;
    }

    public function setGender(?UsersGender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getSmsVerification(): ?SmsVerification
    {
        return $this->smsVerification;
    }

    public function setSmsVerification(?SmsVerification $smsVerification): self
    {
        $this->smsVerification = $smsVerification;

        return $this;
    }

    /**
     * @return Collection|Testimony[]
     */
    public function getTestimonies(): Collection
    {
        return $this->testimonies;
    }

    public function addTestimony(Testimony $testimony): self
    {
        if (!$this->testimonies->contains($testimony)) {
            $this->testimonies[] = $testimony;
            $testimony->setUser($this);
        }

        return $this;
    }

    public function removeTestimony(Testimony $testimony): self
    {
        if ($this->testimonies->contains($testimony)) {
            $this->testimonies->removeElement($testimony);
            // set the owning side to null (unless already changed)
            if ($testimony->getUser() === $this) {
                $testimony->setUser(null);
            }
        }

        return $this;
    }

  
}