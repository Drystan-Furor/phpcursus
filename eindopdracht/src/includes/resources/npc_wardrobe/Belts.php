<?php


//--------------------------------------------------------------------------belts
$numberOf = intval(rand(3, 9));

$beltitems = [
    rand(3, 9) . ' small bottles',
    rand(2, 6) . ' throwing daggers',
    rand(4, 12) . ' throwing darts',
    rand(2, 5) . ' vials with red liquid',
    rand(2, 5) . ' small pouches', 
    rand(10, 40) . ' feet of rope', 
    'a book','a purse','a large tome', 'a small knife',
    'a sash', 'some lockpicks', 'an Abacus', 'a crowbar',
    'a waterskin', 'a hooded lantern', "carpenter's tools",
    'a cylindrical leather case', 'a grappling hook', "a healer's kit",
    'a magniffying glass', 'a leather-bound tome',
    'a spyglass', 'a dangling censer', 'a drinking horn',
    'an iron flask', 'a boomerang', 'ten pouches',
];
//$beltitem = array_rand($beltitems, 5);

$beltmaterials = [
    'cloth', 'cowhide leather', 'full-grain calfskin leather',
    'braided leather', 'tooled leather', 'suede', 'rope',
    'studded leather',
];
//$beltmaterial = array_rand($beltmaterials, 3);

$beltfashions = [
    'embroidered', 'plain', 'smooth', 'simple',
    'traditional', 'common',
];
//$beltfashion = array_rand($beltfashions, 3);

//--------------------------------------------------------------------------belts

$beltfashion = array_rand($beltfashions, 3); //what script?
$beltmaterial = array_rand($beltmaterials, 3);//what script?
$beltitem = array_rand($beltitems, 3);//what script?
$metal = array_rand($metals, 2);//what script?





// array of mixed vars from arrays.
$belts = [ //belt + buckle
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " 
            belt with a " . $metals[$metal[1]] . " buckle",
    //belt + item
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        with " . $beltitems[$beltitem[0]] . " strapped to it",
    //belt + 2 items
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        with " . $beltitems[$beltitem[0]] . " and " . $beltitems[$beltitem[1]] . " 
        strapped to it",
    // belt + 3 items
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        used to hold  " . $beltitems[$beltitem[0]] . ",  " . $beltitems[$beltitem[1]] . "
        and  " . $beltitems[$beltitem[2]],
    //belt + item && belt 2 + item
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        with " . $beltitems[$beltitem[0]] . " strapped to it and another "
        . $beltfashions[$beltfashion[1]] . " " . $beltmaterials[$beltmaterial[1]] . " 
        belt holding " . $beltitems[$beltitem[1]],
    // buckled belt
    $metals[$metal[1]] . " buckled " . $beltfashions[$beltfashion[0]] . " 
    " . $beltmaterials[$beltmaterial[0]] . " belt",

    //BANDOLIERS
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " 
        bandolier with " . $beltitems[$beltitem[0]] . ", " . $beltitems[$beltitem[2]] . "
         and " . $beltitems[$beltitem[1]] . " attached to it",
    //belt + item && bandolier + 2 item
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        holding " . $beltitems[$beltitem[0]] . " and a " . $beltfashions[$beltfashion[1]] .
        " " . $beltmaterials[$beltmaterial[1]] . " bandolier with a "
        . $metals[$metal[1]] . " buckle holding "
        . $beltitems[$beltitem[1]] . " and " . $beltitems[$beltitem[2]],
];
//pregenerated belt selector
$belt = array_rand(array_flip($belts), 1);
