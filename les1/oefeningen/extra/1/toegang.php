<?php

function my_in_array($needle, $haystack) {
    foreach($haystack as $value) {
        if($needle == $value) {
            return true;
        }
    }
    return false;
}

function toegangKrijgen($persoon) {
    
    $naam = $persoon['naam'];
    $isRelatie = $persoon['is_relatie']; 
    $leeftijd = $persoon['leeftijd'];
    $tshirtKleur = $persoon['tshirt'];

    // Constanten
    $zwarteLijst = array('Pietje', 'Kees', 'Jeroen');
    $minimumLeeftijd = 18;
    $toegestaneTshirtKleuren = array('oranje', 'rood', 'wit', 'blauw');

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

    return $krijgtToegang;
}