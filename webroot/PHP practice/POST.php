<?php
/**
 * Created by PhpStorm.
 * User: nemus
 * Date: 1/22/18
 * Time: 1:47 PM
 */

if (isset($_POST["name"])) {
	echo '<p> Hi,' .$_POST["name"].'</p>';
}