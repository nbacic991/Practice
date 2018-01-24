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
    <div>
        <h2>Test baze</h2>
        <!--        /**-->
        <!--        * Executing queries-->
        <!--        */-->
        <!---->
        <!--        /**-->
        <!--        * Deleting Actor with ActorID = 1 <- Ben Stiller-->
        <!--        */-->
        <!--        //$query = "DELETE FROM actors WHERE ActorID = 1";-->
        <!---->
        <!--        /**-->
        <!--        * Updating Actor's last name WHERE ActorID = 2 <- Owen Bacic-->
        <!--        */-->
        <!--        //$query = "UPDATE actors SET last_name = 'Bacic' WHERE ActorID = 2";-->
        <!---->
        <!--        /**-->
        <!--        * Inserting INTO actors table-->
        <!--        * Kind of joke. :)-->
        <!--        */-->
        <!--        //$query = "INSERT INTO actors (first_name, last_name) VALUES ('Nemanja','Bacic'),('Timea','Sogor')";-->
        <!---->
        <!---->
        <!--        /**-->
        <!--        * Inserting new Actor in actors table-->
        <!--        * And printing his ActorID-->
        <!--        */-->
        <!---->
        <!--        $query = "INSERT INTO actors (first_name, last_name) VALUES ('Jing', 'Jang')";-->
        <!---->
        <!--        /**-->
        <!--        * Pinting new actors id-->
        <!--        */-->
        <!---->
        <!--        //echo "Newly created actor ID: ".$connection->insert_id;-->

        <!-- Selecting Data from database -->

		<?php

		$query = "SELECT first_name, last_name FROM actors ORDER BY first_name";
		$resultObj = $connection->query($query);

		if($resultObj->num_rows > 0){
			while ($singleRowFromQuery = $resultObj->fetch_assoc()) {
                //print_r($singleRowFromQuery);
				echo "<p><strong>Actor:</strong> ".$singleRowFromQuery['first_name'].'</p>';
			}
		}

		$resultObj->close();
		/**
		 * Executing query;
		 */
		$connection->query($query);
		$connection->close();
		?>
    </div>

</section>

</body>
</html>


