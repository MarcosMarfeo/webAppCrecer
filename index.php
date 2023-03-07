<?php

use App\Helper\Profiles;

require_once 'bootstrap.php';
$control = 'home';
$action  = 'list';

session_start();
if (empty($_SESSION['user_id']) || empty($_SESSION['user_profile'])) {
    if (!empty($_SESSION)) {
        session_destroy();
    }
    $control = 'login';
}

$control = (isset($_GET['c'])) ? $_GET['c'] : $control;
$action  = (isset($_GET['a'])) ? $_GET['a'] : $action;

$control = strtolower($control);
$action = strtolower($action);

Profiles::validate($control, $action);

$class = 'App\\Controller\\'.ucfirst($control);
if(!class_exists ($class,1)) {
    throw new Exception('invalid address');
}

$controller = new $class($action);
$controller->process();