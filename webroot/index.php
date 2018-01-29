<?php
$uri = $_SERVER['REQUEST_URI'];

switch ($uri)
{
	case '/':
		include 'PHP practice/home.php' ;
		break;
	case '/js':
		include 'PHP practice/js.php' ;
		break;
	case '/php_mysql':
		include 'PHP practice/php_mysql.php' ;
		break;
	default:
		include 'PHP practice/404-error.php';
}
?>
