<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();

require_once('Controller/MasterController.php');

$controller = new \Controller\MasterController();
$controller->run();
