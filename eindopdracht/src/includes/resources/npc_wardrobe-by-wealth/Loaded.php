<?php


//----------------------------------------------------------------------rich/loaded
if ($rich == true || $loaded == true) {

    $wardrobes = [
        'costume', 'gown', "doublet", 'cote hardie',
    ];


    $fabrics = [
        'brocade', 'damask',
    ];


    $textiles = [
        "silk", "velvet",
    ];

    $textile = array_rand(array_flip($textiles), 1);
    $wardrobe = array_rand(array_flip($wardrobes), 1);
    $fabric = array_rand(array_flip($fabrics), 1);


    $clothes = [ // target  wears a 
        $fabric . " " . $textile . " " . $wardrobe . ", fit closely to the body,",
        $fabric . " " . $textile . " hooded cloak",
        "Burgundian style " . $fabric . " " . $textile . " " . $wardrobe,
        "clerical " . $fabric . " " . $textile . " robes",
        "elaborately printed " . $wardrobe . " in " . $fabric . " " . $textile . ",",

        $fabric . " " . $textile . " " . $wardrobe . ", 
        closely following the lines of the body from the 
                shoulder to below the waist",

        $fabric . " " . $textile . " houppelande, a beautiful, 
        full length robe like garment,",
    ];
    $ensemble = array_rand(array_flip($clothes), 1);
}



//------------------------------------------------------loaded
if ($loaded == true) {

    $wealthinessTypes = [
        'who is unmistakenly of noble herritage.',
        'who looks extremely wealthy.',
        'who looks to have money to burn.',
        'who seems to be lousy rich.',
        'that looks opulent and roaring.',
        'who is rich and flourishing.',
        'looking truly halcyon and lucky.',
        'who looks positivly thriving.',
        'looking aristocratic and dignified.',
        'who seems to be a member of a noble family.',
        'who makes a real aristocratic impression.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

    $outfit = $intro .  $thisGender .
        " as $heshe wears a very fine " . $ensemble .
        " featuring " . $richDetail .
        ". With " . $clothingDetail . " that has " . $sleeve .
        ". Perfected with a " . $belt . ". ".
        $feetWithShoes .
        $headdress .
        "Glimmering in the light you see " . $ring .
        ", extravagant and valuable. " .
        "And $heshe is also adorned with a prestigious, fancy " . $jewel . ". ";
}
