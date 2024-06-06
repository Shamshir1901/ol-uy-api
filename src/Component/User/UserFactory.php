<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use DateTime;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFactory
{
    public function __construct(private UserPasswordHasherInterface $passwordEncoder)
    {
    }

    public function create(string $email, string $password, string $familyName, string $givenName, int $type, string $phone): User
    {
        $user = new User();
        $user->setEmail($email);
        $user->setType($type);
        $user->setPhone($phone);
        $user->setFamilyName($familyName);
        $user->setGivenName($givenName);
        $user->setCreatedAt(new DateTime());
        $user->setPassword($this->passwordEncoder->hashPassword($user, $password));

        return $user;
    }
}
