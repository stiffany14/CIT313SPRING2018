<!DOCTYPE html>
<html>
    <head>
        <title>Fisher Price - My First Model View Controller</title>
    </head>
    <body>
        <h1>Hello From My View!</h1>
        <ul>
            <?php
          //  echo "My Name is " . $first . " " . $last . "<br>";
            foreach ($data as $key => $value) {
                echo "<li>". $key . " " . $value . "</li>";
            }
            ?>
        </ul>
    </body>
</html>
