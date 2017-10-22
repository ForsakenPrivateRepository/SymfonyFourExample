<?php

namespace App\Security\Provider;

use App\ValueObject\User;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class ApiKeyUserProvider implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        return new User();
    }

    public function refreshUser(UserInterface $user)
    {
        throw new \BadMethodCallException();
    }

    public function supportsClass($class)
    {
        return true;
    }

}