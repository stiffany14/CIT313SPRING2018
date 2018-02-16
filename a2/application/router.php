<?php

spl_autoload_register(function ($class) {

            if (file_exists('application/' . strtolower($class) . '.class.php')) {
                include 'application/' . strtolower($class) . '.class.php';
            }

            if (file_exists('models/' . strtolower($class) . '.class.php')) {
                include 'models/' . strtolower($class) . '.class.php';
            }

            if (file_exists('controllers/' . strtolower($class) . '.class.php')) {
                include 'controllers/' . strtolower($class) . '.class.php';
            }
        });

 New Controller();
?>
