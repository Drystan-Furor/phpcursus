<?php
//-----------------------------------------------------------------all but beggar
if ($beggar == false) {
    $clothingDetails = [ //with 
        "a separate and fuller skirt sewn to the body,",
        "a loose blouse that can be tightly laced,",
        "an overcoat",
        "a garnache, a long cloak,",
        "a bodice sewn to a skirt",
        "the fabric falling in folds into a bell shape,",
        "a low cut V neck that shows a piece of contrasting fabric underneath,",
        "a Gothic style influence, a look that accentuates slenderness and an 
            elongated form,",
        "a vertical color difference with a split vertical dividing line in 
            the center of the body,",
        "a light linen shift underneath,",
        "luxurious fabrics", "a luxurious trim", 
        "beautiful prints and vibrant colors",
        "edges of the outer garments decorated with dagging, edged with 
            loose pieces of fabric that resembled leaves,",
        "the highest quality textiles",
        
    ];
    $clothingDetail = array_rand(array_flip($clothingDetails), 1);
}


//-------------------------------------------------------------detailed rich/loaded
$patterns = [
    'woven in',
    'embroided',
    'printed on the fabric',
    'of flowers',
];


$linings = [
    "both warmth and style",
    "warmth",
    "style",
];

$lining = array_rand(array_flip($linings), 1);
$pattern = array_rand(array_flip($patterns), 1);


if ($rich == true || $loaded == true) {
    $richdetails = [
        "designs featuring gimmicky or quirky elements",
        "fur lining thats increasing " . $lining,
        "interwoven golden thread for a shimmering effect",
        "ornate and wildly ostentatious designs",
        "patterns and designs " . $pattern,
        "bureaucratic sigils of office dangling from the neck",
    ];
    $richDetail = array_rand(array_flip($richdetails), 1);
}



//-------------------------------------------------------------------------sleeves

$sleeveLength = array_rand(array_flip($lenghts), 1);

$sleeves = [
    $sleeveLength . " sleeves widened toward a bell shape",
    "a high collar and " . $sleeveLength . " sleeves",
    "full sleeves tightened at the wrist",
    $sleeveLength . " sleeves that end at the elbow",
    "no sleeves",
    $sleeveLength . " sleeves",
    "slashings in the sleeves that show the under tunic",
];
$sleeve = array_rand(array_flip($sleeves), 1);