<?php

require 'vendor/autoload.php';

Flight::route('/', function(){
    $q = trim($_GET['q'] ?: '');
    if (!$q) {
        echo "no word";
        return;
    }
    $limelight = new Limelight\Limelight();
    $results = $limelight->parse($q);
    echo $results->string('romaji', '-');
});

Flight::start();
