<?php

namespace App\Tests\Infrastructure\Doctrine\Entity;

use App\Infrastructure\Doctrine\Entity\DoctrineUser;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;

class DoctrineEntityTest extends TestCase
{
    public function testUser()
    {
        $user = new DoctrineUser();
        $user->setId(1);
        $user->setEmail('test@mail.fr');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('azerty');

        $this->assertEquals(1 , $user->getId());
        $this->assertEquals('test@mail.fr', $user->getEmail());
        $this->assertEquals(['ROLE_ADMIN', 'ROLE_USER' ], $user->getRoles());
        $this->assertEquals('azerty', $user->getPassword());
        $this->assertEquals('test@mail.fr', $user->getUserIdentifier());

    }


}
