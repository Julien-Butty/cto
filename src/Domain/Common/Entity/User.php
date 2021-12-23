<?php

namespace App\Domain\Common\Entity;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

interface User
{
    public function setId(int $id): void;
    public function getId(): int;

    public function getEmail(): string;
    public function setEmail(string $email): void;

    public function getRoles(): array;
    public function setRoles(array $roles): void;

    public function getPassword(): string;
}
