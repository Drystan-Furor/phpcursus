
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




//------------------------------------------------------rich
if ($rich == true) {

    $wealthinessTypes = [
        'who looks quite wealthy.',
        'who looks very comfortable.',
        'who seems to be blooming.',
        'that looks "in the money".',
        'who recently became flourishing.',
        'looking halcyon at best.',
        'who looks well-off.',
        'who seems to be on top of the heap.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

    $clotharray = rand(1, 2);
    if ($clotharray == 1) {
        $outfit = $intro . $thisGender .
            " wears a " . $garb .
            " featuring " . $richDetail .
            " with " . $clothingDetail .
            ". Completed with a" . $belt . ". " .
            $feetWithShoes .
            ". You notice " . $ring . ". ";
    } else if ($clotharray == 2) {
        $outfit = $intro . $thisGender .
            " wears a " . $ensemble .
            " with " . $clothingDetail .
            " that has " . $sleeve .
            $feetWithShoes .
            $headdress .
            "Your eye catches a " . $jewel . ". ";
    }
}