<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservatiesRepository")
 */
class Reservaties
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cursus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cursus_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Location")
     * @ORM\JoinColumn(nullable=false)
     */
    private $locatie_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getCursusId(): ?Cursus
    {
        return $this->cursus_id;
    }

    public function setCursusId(?Cursus $cursus_id): self
    {
        $this->cursus_id = $cursus_id;

        return $this;
    }

    public function getLocatieId(): ?Location
    {
        return $this->locatie_id;
    }

    public function setLocatieId(?Location $locatie_id): self
    {
        $this->locatie_id = $locatie_id;

        return $this;
    }
}
