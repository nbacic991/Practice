<?php
$uri = $_SERVER['REQUEST_URI'];

switch ($uri)
{
	case '/':
		include 'home.php';
		break;
	case '/js':
		include 'JS/js.php';
		break;
	case '/php_mysql':
		include 'php_mysql.php';
		break;
	default:
		include '404-error.php';
}
