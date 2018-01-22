<?php
/**
 * Created by PhpStorm.
 * User: nemus
 * Date: 1/22/18
 * Time: 2:44 PM
 */

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0) {
		$allowed = array(
			"jpg" => "image/jpg",
			"jpeg" => "image/jpeg",
			"gif" => "image/gif",
			"png" => "image/png"
			);
		$filename = $_FILES["photo"]["name"];
		$filetype = $_FILES["photo"]["type"];
		$filesize = $_FILES["photo"]["size"];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		if(!array_key_exists($ext,$allowed)) die("Error: please select a valid file format.");

		$maxsize = 5*1024*1024;

		if($filesize>$maxsize) die("Error: filesize is larger than the allowed limit");
		if(in_array($filetype,$allowed)) {
			if(file_exists("upload/".$_FILES["photo"]["name"])) {
				echo $_FILES["photo"]["name"].'already exists.';
			} else {
				move_uploaded_file($_FILES["photo"]["name"],"upload".$_FILES["photo"]["name"]);
				echo "Your file has been uploaded succesfuly";
			}
		} else {
			echo "ERROR: There was a problem uploading your file. Please try again.";
		}

	} else {
		echo "ERROR: ".$_FILES["photo"]["error"];
	}
}