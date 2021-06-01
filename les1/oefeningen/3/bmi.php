<?php

$gewicht = 1;
$lengte = 1.60;

$bmi = ($gewicht / ($lengte * $lengte));

$gewichtKlassen = array('ondergewicht', 'gezond gewicht', 'overgewicht', 'obesitas');

foreach($gewichtKlassen as $gw) {
    echo ucfirst($gw);
    echo '<br/>';
}

for($i=0; $i < count($gewichtKlassen); $i++) {
    echo ucfirst($gewichtKlassen[$i]);
    echo '<br/>';
}

if($bmi > 1 && $bmi < 18.5) {
    echo $gewichtKlassen[0];
} elseif($bmi >= 18.5 && $bmi < 25) {
    echo $gewichtKlassen[1];
} elseif($bmi >= 25 && $bmi < 30) {
    echo $gewichtKlassen[2];
} elseif($bmi >= 30) {
    echo $gewichtKlassen[3];
} else {
    echo 'Error code 101293123';
}

?>