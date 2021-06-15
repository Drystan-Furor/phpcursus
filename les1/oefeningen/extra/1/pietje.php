<?php

require_once 'toegang.php';

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

$personen = array(
    array(
        'naam' => 'Pietje',
        'is_relatie' => false,
        'tshirt' => 'groen',
        'leeftijd' => 21
    ),
    array(
        'naam' => 'Kees',
        'is_relatie' => false,
        'tshirt' => 'groen',
        'leeftijd' => 21
    ),
    array(
        'naam' => 'Marloes',
        'is_relatie' => false,
        'tshirt' => 'oranje',
        'leeftijd' => 21
    ),
    array(
        'naam' => 'Karel',
        'is_relatie' => false,
        'tshirt' => 'groen',
        'leeftijd' => 21
    ),
);

define('MY_EOL', '\n');

   // Presentatie
foreach($personen as $persoon) {
    if(toegangKrijgen($persoon)) {
        echo 'Hallo ' . $persoon['naam'] . ', ' . PHP_EOL;
        echo 'Welkom op het feest :)' . PHP_EOL;
    } else {
        echo $persoon['naam'];
        echo ' je mag niet naar binnen!' . PHP_EOL;
    }
}





