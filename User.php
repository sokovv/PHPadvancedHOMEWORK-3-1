<?php

use Trait\AppUserAuthentication;
use Trait\MobileUserAuthentication;

class User
{
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        AppUserAuthentication::authenticate as method1; // метод первого трейта будет доступен как method1
        MobileUserAuthentication::authenticate as method2; // метод второго трейта будет доступен как method2
    }
}