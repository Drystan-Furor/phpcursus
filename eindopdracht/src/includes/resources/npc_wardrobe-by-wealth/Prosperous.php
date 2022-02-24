
<?php

//-------------------------------------------------------------------------------rich
if ($prosperous == true || $rich == true) {

    $wardrobes = [
        'tunic', 'robe', 'costume', 'gown', "doublet", 'cote hardie',
    ];


    $fabrics = [
        'clean', 'plain', 'straightforward', 'classic', 'simple', 'beautiful',
    ];


    $textiles = [
        "silk", "velvet", 'cotton', 'linen',
    ];

    $textile = array_rand(array_flip($textiles), 1);
    $wardrobe = array_rand(array_flip($wardrobes), 1);
    $fabric = array_rand(array_flip($fabrics), 1);




    $clothingtype3 = [
        $fabric . " hooded " . $textile . " cloak",
        $fabric . " " . $textile . " houppelande, a full length robe like garment",
        $wardrobe . ", that buttons in the front to a low waist, 
        and is fitted to a " . $fabric . " bodice,",
        $wardrobe . ", fit closely to the body",
        "Burgundian style " . $wardrobe,
        $fabric . " " . $textile . " " . $wardrobe,

        $wardrobe . " of " . $fabric . " " . $textile,

        $textile . " " . $wardrobe .
            " similar to the clothing of the elite but made of cheaper 
            materials with less dye and ornamentation",

    ];
    $garb = array_rand(array_flip($clothingtype3), 1);
}



//------------------------------------------------------prosperous
if ($prosperous == true) {

    $wealthinessTypes = [
        'who seems to have some coin.',
        'who looks rather comfortable.',
        'who seems to be fortunate.',
        'that looks a bit prospering.',
        'who recently became upper-class.',
        'looking affluent at best.',
        'who looks priviliged.',
        'who seems to be doing well.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

    $outfit = $intro . $thisGender .
        " wears a " . $garb .
        " with " . $clothingDetail . " that has " . $sleeve . ". " .
        $headdress .
        "Finalized with a " . $belt . ". " .
        $feetWithShoes .
        "The light reflects on a " . $jewel . ". ";
}
