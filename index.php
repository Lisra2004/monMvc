<?php

	//charge roads definition
	require("app/config/roads.php");

	//charge configuration
	require("app/config/config.php");

	//charge composer dependence
	require("vendor/autoload.php");

	//autoload class
	spl_autoload_register(function($className){
		$path = "app" . DIRECTORY_SEPARATOR .
			 str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
		require($path);
	});

	//dispatch roads with url
	$p = (empty($_GET['p'])) ? "/" : $_GET['p'];
	$dispatcher = new Controller\Dispatcher();
	$dispatcher->dispatch($roads, $p);