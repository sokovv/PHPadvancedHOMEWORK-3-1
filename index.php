<?php

require_once('autoload.php');

function access($login, $password): void
{
    $user = new User();
    if ($user->method1($login, $password) === true) {
        echo 'Пользователь авторизовался как пользователь приложения';
        return;
    }
    if ($user->method2($login, $password) === true) {
        echo 'Пользователь авторизовался как пользователь мобильного приложения';
    } else {
        echo "-----Авторизация----- \n";
        echo 'Пользователя не существует';
    }
}

access('MobileUser', 321);








