<?php

ini_set('display_errors', 0);
error_reporting(E_ALL);

include('components/route.php');
include('components/Pagination.php');

include('models/Message.php');
include('models/User.php');
session_start(); //for auth
include ('components/captcha/simple-php-captcha.php');

$router = new Route();
$router->start();

