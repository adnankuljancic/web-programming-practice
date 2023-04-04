<?php
require 'vendor/autoload.php';

Flight::route('/', function() {
    echo "Deployed! Welcome.";
});

Flight::route('/@name', function($name) {
    echo "Hello, $name !";
});


Flight::start();
?>