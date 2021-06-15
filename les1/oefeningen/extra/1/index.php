<?php

function my_in_array($needle, $haystack) {
    foreach($haystack as $value) {
        if($needle == $value) {
            return true;
        }
    }
    return false;
}

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

// Begin state
$naam = "Pietje";
$isRelatie = false;
$leeftijd = 21;
$tshirtKleur = 'zwart';

// Constanten
$zwarteLijst = array('Pietje');
$minimumLeeftijd = 18;
$toegestaneTshirtKleuren = array('oranje', 'rood', 'wit', 'blauw');

// Condities
$krijgtToegang = false;

if(my_in_array($naam, $zwarteLijst)) {
    $krijgtToegang = false;
}
elseif($isRelatie) {
    $krijgtToegang = false;
}
elseif($leeftijd < $minimumLeeftijd) {
    $krijgtToegang = false;
}
elseif(!my_in_array($tshirtKleur, $toegestaneTshirtKleuren)) {
    $krijgtToegang = false;
} 
else {
    $krijgtToegang = true;
}

// Presentatie
if($krijgtToegang) {
    echo 'Welkom op het feest :)';
} else {
    echo 'Je mag niet naar binnen!';
}
