<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $beschikbaarheid;

    /**
     * @ORM\Column(type="integer")
     */
    private $lengtegraad;

    /**
     * @ORM\Column(type="integer")
     */
    private $breedtegraad;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $afbeelding;


    public function getBeschikbaarheid(): ?bool
    {
        return $this->beschikbaarheid;
    }

    public function setBeschikbaarheid(bool $beschikbaarheid): self
    {
        $this->beschikbaarheid = $beschikbaarheid;

        return $this;
    }

    public function getLengtegraad(): ?int
    {
        return $this->lengtegraad;
    }

    public function setLengtegraad(int $lengtegraad): self
    {
        $this->lengtegraad = $lengtegraad;

        return $this;
    }

    public function getBreedtegraad(): ?int
    {
        return $this->breedtegraad;
    }

    public function setBreedtegraad(int $breedtegraad): self
    {
        $this->breedtegraad = $breedtegraad;

        return $this;
    }

    public function getAfbeelding(): ?string
    {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): self
    {
        $this->afbeelding = $afbeelding;

        return $this;
    }
}
