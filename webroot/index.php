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
    h5,
    p {
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
    <!--        <p>This query is showing all of the actors from my test_project database.</p>-->
    <!--		--><?php //include "PHP practice/DatabaseResults.php";?>
    <!--    </div>-->
    <div class="get-and-post">
<!--        --><?php //include "PHP practice/GET.php";?>
<!---->
<!--        <form method="get" action="--><?php //echo $_SERVER["PHP_SELF"]; ?><!--">-->
<!--            <label for="inputName">-->
<!--                Name:-->
<!--            </label>-->
<!--            <input type="text" name="name" id="inputName">-->
<!--            <input type="submit" value="submit">-->
<!--        </form>-->

        <?php include "PHP practice/POST.php"; ?>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="inputName">
                Name:
            </label>
            <input type="text" name="name" id="inputName">
            <input type="submit" value="submit">
        </form>
        
    </div>
</section>

</body>
</html>


