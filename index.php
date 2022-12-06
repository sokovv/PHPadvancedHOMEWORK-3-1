<?php

require_once('autoload.php');

function access($login, $password): void
{
    $user = new User();
    $user->authenticate($login, $password);

}

access('AppUser', 123);