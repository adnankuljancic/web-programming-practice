<?php
require 'vendor/autoload.php';

Flight::route('/', function() {
    echo "Hi!";
});

Flight::route('/@name', function($name) {
    echo "Hello, $name !";
});


Flight::start();
?>