<?php
/**
 * Created by PhpStorm.
 * User: nemus
 * Date: 1/24/18
 * Time: 8:59 AM
 */

/**
 * MySQLi connection to test_project database
 */
$dbPassword = "drupal";
$dbUserName = "drupal";
$dbServer = "mariadb";
$dbName = "test_project";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);


if ($connection->connect_errno) {
	exit ("Database connection failed. Reason: " .$connection->connect_error);
}
