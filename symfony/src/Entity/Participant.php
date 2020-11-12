<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParticipantRepository::class)
 */
class Participant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $fullName;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $degree;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $workPlace;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $contactPhones;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $eventNameSpeaker;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $eventNameListener;

    /**
     * @ORM\Column(type="string", length=6000)
     */
    private $publication;

    /**
     * @ORM\Column(type="datetime")
     */
    private $regDateTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

        return $this;
    }

    public function getWorkPlace(): ?string
    {
        return $this->workPlace;
    }

    public function setWorkPlace(string $workPlace): self
    {
        $this->workPlace = $workPlace;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getContactPhones(): ?string
    {
        return $this->contactPhones;
    }

    public function setContactPhones(string $contactPhones): self
    {
        $this->contactPhones = $contactPhones;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEventNameSpeaker(): ?string
    {
        return $this->eventNameSpeaker;
    }

    public function setEventNameSpeaker(string $eventNameSpeaker): self
    {
        $this->eventNameSpeaker = $eventNameSpeaker;

        return $this;
    }

    public function getEventNameListener(): ?string
    {
        return $this->eventNameListener;
    }

    public function setEventNameListener(string $eventNameListener): self
    {
        $this->eventNameListener = $eventNameListener;

        return $this;
    }

    public function getPublication(): ?string
    {
        return $this->publication;
    }

    public function setPublication(string $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getRegDateTime(): ?\DateTimeInterface
    {
        return $this->regDateTime;
    }

    public function setRegDateTime(\DateTimeInterface $regDateTime): self
    {
        $this->regDateTime = $regDateTime;

        return $this;
    }
}
