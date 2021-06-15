<?php
// Functies.
function my_in_array($speld, $hooiberg) {
    foreach($hooiberg as $waarde) {
        if($speld == $waarde) {
            return true;
        }
    }
    return false;
}

function checkToegang($naam, $leeftijd, $isSingle, $tshirtKleur) {
    // Constanten.
    $zwarteLijst = array('Kees', 'Pietje');
    $minimumLeeftijd = 18;
    $toegestaneTshirtKleuren = array('oranje', 'rood', 'wit', 'blauw');

    // Condities.
    $toegang = true;
    if(my_in_array($naam, $zwarteLijst) ) {
        $toegang = false;
    }
    elseif($leeftijd <= $minimumLeeftijd) {
        $toegang = false;
    }
    elseif(!$isSingle) {
        $toegang = false;
    }
    elseif(!my_in_array($tshirtKleur, $toegestaneTshirtKleuren)) {
        $toegang = false;
    }

    return $toegang;
}