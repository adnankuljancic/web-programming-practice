<?php
require 'vendor/autoload.php';

Flight::route('/@name', function($name) {
    echo "Hello, $name !";
});


Flight::start();
?>