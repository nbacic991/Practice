<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Practice</title>
</head>
<style>
    /**
     * Inline style
     */
    h1,
    h2,
    h3,
    h4,
    h5 {
        text-align: center;
    }

    section > div {
        margin: auto;
        width: 70%;
    }

    .database > table {
        width: 50%;
        margin: auto;
    }

</style>
<body>
<?php require "PHP practice/DatabaseConnection.php"?>

<h1 style="text-align: center;">PHP Practice</h1>
<section>
    <!--    <div class="classes">-->
    <!--		--><?php //include "PHP practice/Classes.php"; ?>
    <!--    </div>-->
    <!--    <div class="chaining">-->
    <!--		--><?php //include "PHP practice/Chaining.php"; ?>
    <!--    </div>-->
    <!--    <div class="access-modifiers">-->
    <!--        --><?php //include "PHP practice/AccessModifiers.php";?>
    <!--    </div>-->
    <!--    <div class="magic-methods_and_constants">-->
    <!--        --><?php //include "PHP practice/MagicMethodsAndConstants.php";?>
    <!--    </div>-->
    <!--    <div class="inheritance">-->
    <!--        --><?php //include "PHP practice/Inheritance.php" ?>
    <!--    </div>-->
    <!--    <div class="abstract_classes-and-methods">-->
    <!--        --><?php //include "PHP practice/AbstractClassesAndMethods.php";?>
    <!--    </div>-->
    <!--    <div class="database">-->
    <!--        <p>This query is showing actors from my test_project database.</p>-->
    <!--		--><?php //include "PHP practice/DatabaseResults.php";?>
    <!--    </div>-->
    <!--    <div class="date-and-time">-->
    <!--        --><?php //include "PHP practice/DateAndTime.php";?>
    <!--    </div>-->
    <!--    <div class="upload-files">-->
    <!--        <h1>File upload form</h1>-->
    <!--        <form action="upload-manager.php" method="post" enctype="multipart/form-data">-->
    <!--            <h2>Upload File</h2>-->
    <!--            <label for="fileSelect">-->
    <!--                File Name: -->
    <!--            </label>-->
    <!--            <input type="file" name="photo" id="fileSelect">-->
    <!--            <input type="submit" name="Submit" value="Upload">-->
    <!--            <p><strong>NOTE:</strong>Only .jpg .jpeg .gif .png formats supported to a max size of 5mb</p>-->
    <!--        </form>-->
    <!--    </div>-->
    <!--  <div>
		 <!--        <h2>Test baze</h2>-->

    <!-- Selecting Data from database -->
    <!--		--><?php

	//
	//		$query = "SELECT first_name, last_name FROM actors ORDER BY first_name";
	//		$resultObj = $connection->query($query);
	//
	//		if($resultObj->num_rows > 0){
	//			while ($singleRowFromQuery = $resultObj->fetch_assoc()) {
	//                //print_r($singleRowFromQuery);
	//				echo "<p><strong>Actor:</strong> ".$singleRowFromQuery['first_name'].'</p>';
	//			}
	//		}
	//
	//		$resultObj->close();
	//		/**
	//		 * Executing query;
	//		 */
	//		$connection->query($query);
	//		$connection->close();
	//		?>
    <!-- </div> -->
    <!--    <div class="testing-oop">-->
    <!--        --><?php
	//            include "PHP practice/OOP/NewClass.php";
	//
	//            $object = new NewClass;
	//            unset($object);
	//            echo $object->getProperty();
	//        ?>
    <!---->
    <!---->
    <!--    </div>-->
    <div class="arrays">
		<?php
		include "PHP practice/Arrays.php";

		//        foreach ($authors as $key=>$author) {
		//            echo "<div class='$author[0]-$author'>
		//                    <p>Key: $key</p>
		//                    <p>Author: $author</p>
		//                    </div>";
		//        }
		/**
		 * Practice 1, printing items from array

		echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
        the $color[3] carpet, the $color[2] lawn, the $color[1] house, the leaden sky. 
        The new president and his first lady. - Richard M. Nixon.". "<br /><br /><br />";
         */

		/**
		 * Practice 2 print single item from array in ul> li

		sort($color2);
		foreach ($color2 as $singleColor) {

			echo "<ul><li>$singleColor</li></ul>";
		}
		 */

		/**
		 * Practice 3 Create a PHP script which displays the capital and country name
         * from the above array $ceu. Sort the list by the capital of the country.

        foreach ($ceu as $country => $capital) {
            echo "The capital of $country is $capital".'<br>';
        }
         * */

		/**
		 * Delete an element from the above PHP array.
         * After deleting the element, integer keys must be normalized.
		 */
		/**
		 *
		//Print all values
		var_dump($x);
		//Remove ( unset ) first item in array
		unset($x[1]);
		//Sorting key values from the beginning
		$x = array_values($x);
		//New line
		echo '<br>';
		//Print now array
		var_dump($x);
         */

		/**
		 * echo 'Expected result: '.$keyColor[4];
		 */
//		function myJSONfunction($value,$key)
//		{
//			echo "$key : $value"."\n";
//		}
//		$a = '{"Title": "The Cuckoos Calling<br/>",
//                "Author": "Robert Galbraith<br/>",
//                "Detail": {
//                    "Publisher": "Little Brown"
//                    }
//                }';
//		$decoding = json_decode($a,true);
//		array_walk_recursive($decoding,"myJSONfunction");
		/**
		 * Write a PHP script that inserts a new item in an array in any position
		 */
		//Original array
//
//		echo 'Original array : ';
//		foreach ($orig as $new) {
//		    echo "$new";
//		}
//		echo '<br>';
//
//		//Character that is going to be inserted
//		$insChar = '$';
//
//		//Inserting '$' in first place
//		array_splice( $orig, 0, 0, $insChar );
//		echo " \n After inserting '$insChar' the array is : ";
//		foreach ($orig as $new) {
//		    echo "$new ";
//		}
//		echo '<br>';

		/**
		 * Associative array
         * 1. Ascending order sort by value
         * 2. Ascending order sort by key
         * 3. Descending order sorting by value
         * 4. Descending order sorting by key
		 */

//		echo "1. Ascending order sort by value<br>";
//		asort($people);
//		foreach ($people as $age => $name) {
//		    echo "Age of $age is: $name <br>";
//        }
//        echo "<br>";
//
//		echo "2. Ascending order sort by key<br>";
//        ksort($people);
//		foreach ($people as $age2 => $name2) {
//		    echo "Age of: $age2 is: $name2 <br>";
//        }
//		echo "<br>";
//
//		echo "3. Descending order sort by key<br>";
//        arsort($people);
//        foreach ($people as $age3 => $name3) {
//	        echo "Age of: $age3 is: $name3 <br>";
//        }
//        echo "<br>";
//
//		echo "4. Descending order sorting by key<br>";
//		krsort($people);
//		foreach ($people as $age4 => $name4) {
//			echo "Age of: $age4 is: $name4 <br>";
//		}
//		echo "<br>";

		/**
		 * Write a PHP script to calculate and display average temperature,
         * five lowest and highest temperatures
         * $temp;
		 */

//		$temp_array = explode(',', $temp);
//		$total_temp = 0;
//		$temp_array_num = count($temp_array);
//		foreach($temp_array as $temp)
//		{
//			$total_temp += $temp;
//		}
//		$avg_temp_hi = $total_temp/$temp_array_num;
//		echo "Average temp is : $avg_temp_hi <br>";
//
//		sort($temp_array);
//		echo "List of seven lowest temps in array: ";
//		for ($i=0; $i<7; $i++) {
//		    echo $temp_array[$i];
//        }
//
//        echo "<br>List of seven highest temps: ";
//		for ($i = ($temp_array_num - 7); $i < ($temp_array_num); $i++) {
//		    echo $temp_array[$i];
//        }

		?>

    </div>

</section>

</body>
</html>


