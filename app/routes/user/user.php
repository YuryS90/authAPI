<?php
return function ($user)
{
    $user->get('/get', \Controllers\User\GetController::class);
};