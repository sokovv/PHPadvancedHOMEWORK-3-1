<?php

namespace Trait;

trait AppUserAuthentication
{
    private string $loginApp = 'AppUser';
    private int $passwordApp = 123;

    public function authenticate($loginApp, $passwordApp): bool
    {
        if ($this->loginApp === $loginApp && $this->passwordApp === $passwordApp) {
            echo "-----Авторизация----- \n";
            echo 'Пользователь авторизовался как пользователь приложения';
            return true;
        }
        return false;
    }
}