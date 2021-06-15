<?php
ini_set(‘error_reporting’, E_ALL) ; ini_set(‘display_errors’, 1);
$Naam = "Pietje"; //Pietje is vervelend.
$Age = 18;
$Kleuren = array("Oranje", "Rood", "Wit", "Blauw",);
$Tshirtkleur = "Kleuren";
$Weigeren = true;
$Toestaan = true;
if($Naam = $Age) {
    echo "weigeren" ;
}
else{($Naam != $Age ) {
    echo "Toestaan";
}
if($Age <= 18) {
    echo "weigeren";
}
   else($Age >18) {
    echo "Toestaan";
}
if($Zwartelijst = $achternaam) {
    echo "weigeren";
} 
else($Zwartelijst != $achternaam) {
    echo "Toestaan";
}   
if($Tshirtkleur == $Kleuren[0]) {
    echo $Toestaan;                      
}
else($Tshirtkleur != $Kleuren[0]) {
    echo "weigeren";                      
}
if($Tshirtkleur == $Kleuren[1]) {
    echo $Toestaan;
}
else($Tshirtkleur != $Kleuren[1]) {
    echo "weigeren";                      
}
if($Tshirtkleur == $Kleuren[2]) {
    echo "weigeren";
}
else($Tshirtkleur != $Kleuren[2]) {
    echo "weigeren";                      
}
   elseif($Tshirtkleur == $Kleuren[3]) {
    echo $Toestaan;
}   
else($Tshirtkleur != $Kleuren[3]) {
    echo "weigeren";                      
}
?>