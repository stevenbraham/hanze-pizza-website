<?php
session_start();
//code I used during developing to debug my application
error_reporting(E_ALL);
ini_set('display_errors', '1');
//set basepath
define('FRAMEWORK_BASE_PATH', __DIR__ . '/');

//include all required php files
$frameworkFiles = glob('framework/*.php');
foreach ($frameworkFiles as $frameworkFile) {
    if (file_exists($frameworkFile)) {
        require_once $frameworkFile;
    }
}

//use the same way to include all controllers and models

$controllerFiles = glob('app/controllers/*.php');
foreach ($controllerFiles as $controllerFile) {
    if (file_exists($controllerFile)) {
        require_once $controllerFile;
    }
}

$modelFiles = glob('app/models/*.php');
foreach ($modelFiles as $modelFile) {
    if (file_exists($modelFile)) {
        require_once $modelFile;
    }
}

//use router object to redirect request
$router = new \Framework\Router();
$router->parseRequest();