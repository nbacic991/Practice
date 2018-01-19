<?php
/**
 * Created by PhpStorm.
 * User: nemus
 * Date: 1/19/18
 * Time: 3:16 PM
 */

class TableRows extends RecursiveIteratorIterator {
	function __construct($it) {
		parent::__construct($it, self::LEAVES_ONLY);
	}

	function current() {
		return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
	}

	function beginChildren() {
		echo "<tr>";
	}

	function endChildren() {
		echo "</tr>" . "\n";
	}
}

$servername = "mariadb";
$username = "drupal";
$password = "drupal";
$dbname = "test_project";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->prepare("SELECT * FROM actors");
	$stmt->execute();



	// set the resulting array to associative
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
		echo $v;
	}
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;