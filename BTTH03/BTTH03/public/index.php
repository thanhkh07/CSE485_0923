<?php
require_once('../app/config/config.php');
require_once APP_ROOT . '/app/libs/DBConnection.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'BaiHat';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ucfirst($controller);
$controller .= 'Controller';
$controllerPath = '../app/controllers/' . $controller . '.php';

// if (!file_exists($controllerPath)) {
//     die('File not exists');
// }

require_once APP_ROOT . '/app/controllers/' . $controller . '.php';
$myObj = new $controller();
$myObj->$action();