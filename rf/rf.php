<?php
DEFINE("CONFIG_FILE", "./application/config.xml");
DEFINE("DEFAULT_CONTROLLER", "default");
DEFINE("DEFAULT_ACTION", "index");

if (file_exists(CONFIG_FILE))
{
	include('./rf/bootstrap.php');
	$bootstrap = new Bootstrap();
	$bootstrap->init();
	
	include('./rf/viewRender.php');
	include('./rf/router.php');
}
else
{
	echo("Can't load configuration file.");
}