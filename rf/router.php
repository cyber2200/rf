<?php
$pathArr = explode("/", $_SERVER['PATH_INFO']);

// Set controller.
if (isset($pathArr[1]) && $pathArr[1] != '')
{
	$controller = $pathArr[1];
}
else
{
	$controller = DEFAULT_CONTROLLER;
}

// Set action.
if (isset($pathArr[2]) && $pathArr[2] != '')
{
	$action = $pathArr[2];
}
else
{
	$action = DEFAULT_ACTION;
}

// Including the controller class file.
include('./application/controllers/'. $controller .'.php');

// Create a controller object.
$className = $controller . 'Controller';
$controllerObj = new $className;

// Firing the action.
call_user_method($action . 'Action', $controllerObj);