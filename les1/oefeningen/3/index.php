<?php
/**

Maak een programma waarmee je het BMI kan berekenen en tonen.
De formule voor het berekenen van je BMI is: gewicht (kg) / (lengte (m) x lengte (m)).
Regels:

Lager dan 18,5: Ondergewicht
Tussen 18,5 en 25: Gezond gewicht
Tussen 25 en 30: Overgewicht
Hoger dan 30: Obesitas

*/

$gewicht = 80;
$lengte = 1.80;

$gewichtTypen = array('Ondergewicht!', 'Gezond gewicht', 'Overgewicht', 'Obesitas');

$bmi = ($gewicht / ($lengte * $lengte));

if($bmi > 0 && $bmi <= 18.5) {
    echo $gewichtTypen[0];
} 
elseif($bmi > 18.5 && $bmi <= 25) {
    echo $gewichtTypen[1];
} 
elseif($bmi > 25 && $bmi <= 30) {
    echo $gewichtTypen[2];
} 
elseif($bmi > 30) {
    echo $gewichtTypen[3];
} 
else {
    echo 'ongeldige invoer';
}