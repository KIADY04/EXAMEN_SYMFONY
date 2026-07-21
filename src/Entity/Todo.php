<?php

namespace App\Entity;

use App\Repository\TodoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TodoRepository::class)]
class Todo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TITLE = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $DESCRIPTION = null;

    #[ORM\Column(length: 50)]
    private ?string $STATUS = null;

    #[ORM\Column(length: 255)]
    private ?string $ASSIGNEDTO = null;

    #[ORM\Column(length: 20)]
    private ?string $PRIORITY = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTITLE(): ?string
    {
        return $this->TITLE;
    }

    public function setTITLE(string $TITLE): static
    {
        $this->TITLE = $TITLE;

        return $this;
    }

    public function getDESCRIPTION(): ?string
    {
        return $this->DESCRIPTION;
    }

    public function setDESCRIPTION(?string $DESCRIPTION): static
    {
        $this->DESCRIPTION = $DESCRIPTION;

        return $this;
    }

    public function getSTATUS(): ?string
    {
        return $this->STATUS;
    }

    public function setSTATUS(string $STATUS): static
    {
        $this->STATUS = $STATUS;

        return $this;
    }

    public function getASSIGNEDTO(): ?string
    {
        return $this->ASSIGNEDTO;
    }

    public function setASSIGNEDTO(string $ASSIGNEDTO): static
    {
        $this->ASSIGNEDTO = $ASSIGNEDTO;

        return $this;
    }

    public function getPRIORITY(): ?string
    {
        return $this->PRIORITY;
    }

    public function setPRIORITY(string $PRIORITY): static
    {
        $this->PRIORITY = $PRIORITY;

        return $this;
    }
}
