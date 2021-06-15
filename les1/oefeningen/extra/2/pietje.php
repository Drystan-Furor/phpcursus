<?php

require_once 'functions.php';

// Input.
$n = 'Jan';
$l = 21;
$i = true;
$t = 'blauw';

// Presentatie
if(checkToegang($n, $l, $i, $t)) {
    echo 'Welkom op het feest :)';
} else {
    echo 'Je mag niet naar binnen!';
}
