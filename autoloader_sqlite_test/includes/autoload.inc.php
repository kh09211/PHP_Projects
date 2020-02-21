<?php
// This is my simple little Class autoloader for the gallery app
spl_autoload_register(function($className) {
	require_once 'classes/' . $className . '.class.php';
});

/*
function myAutoloader($className) {
	$path = 'classes/';
	$ext = '.class.php';

	require_once $path . $className . $ext;
}
*/

