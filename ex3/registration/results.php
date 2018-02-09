<?php
spl_autoload_register(function ($class) {
            include '../classes/' . strtolower($class) . '.class.php';
        });

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$registered_user = new Registered('regular', 'newuser');
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise 3</title>
    </head>
    <body>

                <?php

                      echo "User first name is: <b>" . $firstname .  "</b>.";
                      echo "<br>";
                      echo "User last name is: <b>" . $firstname .  "</b>.";
                      echo "<br>";
                      echo "User email address is: <b>" . $firstname .  "</b>.";
                ?>
                <hr>

    </body>
</html>
