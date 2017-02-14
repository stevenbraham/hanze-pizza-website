<?php
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

$appFiles = glob('app/controllers/*.php');
foreach ($appFiles as $appFile) {
    if (file_exists($appFile)) {
        require_once $appFile;
    }
}

//use router object to redirect request
$router = new \Framework\Router();
$router->parseRequest();