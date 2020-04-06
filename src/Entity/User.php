<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UserSomething", cascade={"persist"})
     * @ORM\JoinColumn(name="user_something_id", nullable=true, onDelete="SET NULL")
     * @Assert\Valid(groups={"Default", "validate_user_name"})
     */
    private $userSomething;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserSomething(): ?UserSomething
    {
        return $this->userSomething;
    }

    public function setUserSomething(?UserSomething $userSomething): self
    {
        $this->userSomething = $userSomething;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
