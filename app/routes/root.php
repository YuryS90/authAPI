<?php
return function ($app)
{
    $app->group('/user', include 'app/routes/user/user.php');
};