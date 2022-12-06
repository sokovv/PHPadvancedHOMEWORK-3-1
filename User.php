<?php

use Trait\AppUserAuthentication;
use Trait\MobileUserAuthentication;

class User
{
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        AppUserAuthentication::authenticate as desktopAuthenticate; // метод первого трейта будет доступен как method1
        MobileUserAuthentication::authenticate as mobileAuthenticate; // метод второго трейта будет доступен как method2
    }

    public function authenticate($login, $password): void
    {
        if ($this->desktopAuthenticate($login, $password) === true) {
            return;
        }
        if ($this->mobileAuthenticate($login, $password) === true) {
            return;
        }
        echo 'Пользователя не существует';
    }
}