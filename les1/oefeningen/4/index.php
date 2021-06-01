Oefening 1

<?php $namen = array("Piet", "Kees", "Jan", "Annabel"); ?>

Toon Piet en Annabel op het scherm.

<?php echo $namen[0] . ' en ' . $namen[3]; ?>

Oefening 2

<?php 

$namen[2] = 'Karel'; 

?>

Oefening 3

Maak een associatieve array obv onderstaande data:

Product | Voorraad
-----------------
Kaas | 2
Melk | 4
Eieren | 16
Boter | 256

<?php 

$voorraad = array(
    'Kaas' => 2,
    'Melk' => 4,
    'Eieren' => 16,
    'Boter' => 256
);

?>

Oefening 4

Maak een multi-dimensionale array obv onderstaande data:

ID | Product | Voorraad | Verkocht
----------------------------------
1 | Kaas | 2 | 10
2 | Melk | 4 | 8
3 | Eieren | 16 | 14
4 | Boter | 256 | 44

<?php

$productenMatrix = array(
        array(
            'ID' => 1,
            'Product' => 'Kaas',
            'Voorraad' => 2,
            'Verkocht' => 10
        ),
        array(
            'ID' => 2,
            'Product' => 'Melk',
            'Voorraad' => 4,
            'Verkocht' => 8
        ),
        array(
            'ID' => 3,
            'Product' => 'Eieren',
            'Voorraad' => 16,
            'Verkocht' => 14
        ),
        array(
            'ID' => 4,
            'Product' => 'Boter',
            'Voorraad' => 256,
            'Verkocht' => 44
        )
    );


$kaas = $productenMatrix[0];

echo $kaas['Voorraad'];

echo $productenMatrix[0]['Voorraad'];

$keys = array_keys($kaas);

?>

Oefening 5

Schrijf een functie die het aantal tekens teruggeeft van een string.

<?php

function countChars($string) {
    return strlen($string);
}

$charCount = countChars('Hallo Wereld');

echo "Aantal tekens: {$charCount}";

?>

Oefening 6

Schrijf een functie die woorden vervangt voor een andere woorden in een tekst.

<?php

function replaceWords($words = array(), $replacementWords = array(), $subject = '') {
    return str_replace($words, $replacementWords, $subject);
}

print_r(replaceWords( array('hello', 'world'), array('Byebye', 'World'), 'hello world.'));

$string = 'hello world.';

echo str_replace('world', 'Wereld', str_replace('hello', 'Bye', $string));


?>

Oefening 7 

Schrijf een functie om onderstaande tekst om te zetten naar een array van woorden met kleine letters.
De woorden mogen geen leestekens bevatten zoals een '.' of een ','.

<?php 

$tekst = 'Cultivar a, trifecta instant skinny, espresso, con panna, crema spoon mocha, in coffee, sugar, french press medium latte trifecta instant to go. Breve skinny cinnamon grounds grinder, cortado, dark cup, crema percolator turkish, decaffeinated aromatic aftertaste redeye iced chicory. Single origin, steamed at seasonal, aged iced galão aftertaste beans sweet mug, extra filter, in, cappuccino, white con panna, frappuccino aftertaste frappuccino qui chicory. Grinder medium et so, and java, trifecta, at, extra café au lait trifecta, organic blue mountain coffee dark single origin. Viennese, aroma filter saucer cinnamon and, white, to go, crema coffee so lungo grounds, cultivar percolator french press acerbic americano siphon. Steamed eu est blue mountain, mug decaffeinated cortado strong, so as mug espresso acerbic sugar french press aroma.';

function stringSplitToArrayWithLowerCaseWords($string) {
    
    $string = str_replace('.', '', 
                str_replace(',', '', 
                    strtolower($string)));
    
    return explode(' ', $string);
}

print_r(stringSplitToArrayWithLowerCaseWords($tekst));



?>