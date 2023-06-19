<?php 
    define('IN_PRODUCTION', true);
    session_start();
    $middlewares = include("middlewares.php");

    call_user_func($middlewares["auth"]);

    unset($_SESSION["user"]);
    header("location: /");