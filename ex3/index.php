<!DOCTYPE html>
<?php

spl_autoload_register(function ($class) {
            include 'classes/' . strtolower($class) . '.class.php';
        });

$registered_user = new Registered('User', 'stiffany');
$admin_user = new Admin('Admin', 'sabner');
$registered_user->first_name = "Shelby";
$registered_user->last_name = "Tiffany";
$registered_user->email_address = "stiffany@iu.edu";
$admin_user->first_name = "Shelby";
$admin_user->last_name = "Abner";
$admin_user->email_address = "sabner@iupui.edu";
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Exercise 2</title>
    </head>
    <body>
          Level: <?php echo $registered_user->user_level; ?>
          <br>
          ID: <?php echo $registered_user->user_id; ?>
          <br>
          User Type: <?php echo $registered_user->user_type; ?>
          <br>
          First Name: <?php echo $registered_user->first_name ?>
          <br>
          Last Name: <?php echo $registered_user->last_name?>
          <br>
          Email: <?php echo $registered_user->email_address ?>

        <hr>

          Level: <?php echo $admin_user->user_level; ?>
          <br>
          ID: <?php echo $admin_user->user_id; ?>
          <br>
          User Type: <?php echo $admin_user->user_type; ?>
          <br>
          First Name: <?php echo $admin_user->first_name ?>
          <br>
          Last Name: <?php echo $admin_user->last_name ?>
          <br>
          Email: <?php echo $admin_user->email_address ?>
<br><br>
  Let's do math! (5+10)*2= <?php echo Admin::evaluation (5, 10, 2); ?>
  <br><br>
                <a href="registration/register.php">Register</a>
    </body>
</html>
