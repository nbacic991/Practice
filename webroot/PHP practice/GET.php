<?php
/**
 * Created by PhpStorm.
 * User: nemus
 * Date: 1/22/18
 * Time: 1:37 PM
 */

if(isset($_GET["name"])) {
	echo '<p>Hi, ' .$_GET["name"] . '</p>';
}