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
// Including the model class file.
$modelPath = '../application/models/'. $controller .'.php';
if (file_exists($modelPath))
{
	include($modelPath);
}

// Including the controller class file.
$controllerPath = '../application/controllers/'. $controller .'.php';
if (file_exists($controllerPath))
{
	include('../application/controllers/'. $controller .'.php');
}
else
{
	echo ("Can't load controller");
}

// Create a controller object.
$className = $controller . 'Controller';
$controllerObj = new $className;
$controllerObj->setBootstrap($bootstrap);

// Firing the action.
call_user_method($action . 'Action', $controllerObj);