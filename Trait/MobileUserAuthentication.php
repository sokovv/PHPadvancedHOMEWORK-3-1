<?php

namespace Trait;

trait MobileUserAuthentication
{
    private string $loginMobile = 'MobileUser';
    private int $passwordMobile = 321;

    public function authenticate($loginMobile, $passwordMobile): bool
    {
        if ($this->loginMobile === $loginMobile && $this->passwordMobile === $passwordMobile) {
            echo "-----Авторизация----- \n";
            return true;
        }
        return false;
    }
}