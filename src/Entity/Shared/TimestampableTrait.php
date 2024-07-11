<?php

namespace App\Entity\Shared;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

trait TimestampableTrait
{
    #[ORM\Column]
    private \DateTime $createdAt;

    #[ORM\Column]
    private \DateTime $updatedAt;

    #[ORM\PrePersist]
    public function prePersist(): void
    {
        $now = new DateTime();
        $this->createdAt = $now;
        $this->updatedAt = $now;
    }

    #[ORM\PreUpdate]
    public function preUpdate(): void
    {
        $this->updatedAt = new DateTime();
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }


    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
