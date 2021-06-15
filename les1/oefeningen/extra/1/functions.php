<?php
$kleuren = array('zwart', 'rood');

function verwijderUitArray($waarde, &$array) {
    foreach($array as $sleutel => $arrayWaarde) {
        if($waarde == $arrayWaarde) {
            unset($array[$sleutel]);
        }
    }
}

verwijderUitArray('rood', $kleuren);

function doeIets($a, $b, $c, $d, $e, $f, $g) {

}

function doeIets($array) {
    $a = $array['a'];
    $b = $array['b'];
}




/*function removeFromArray($needle, &$haystack) {
    foreach($haystack as $key => $value) {
        if($value == $needle) {
            unset($haystack[$key]);
        }
    }
}*

removeFromArray('rood', $kleuren);

print_r($kleuren);

