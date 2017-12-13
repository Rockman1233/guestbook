<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('components/route.php');
include('models/Message.php');
include('models/User.php');
session_start(); //for auth

$router = new Route();
$router->start();

