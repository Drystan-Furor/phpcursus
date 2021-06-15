<?php

// 0, 1, 2
$gewoneArray = array('hallo', 'wereld');

echo $gewoneArray[0];

$aArray = array(
    'a' => 'hallo',
    'b' => 'wereld'
);

echo $aArray['b'];

$mArray = array(
    array('a','b','c'), 
    array('d','e','f')
);

echo $mArray[0][0]; // a
echo $mArray[0][1]; // b
echo $mArray[0][2]; // c

echo $mArray[1][0]; // d
echo $mArray[1][1]; // e
echo $mArray[1][2]; // f

for($i = 0; $i < count($mArray); $i++) {
    for($j = 0; $j < count($mArray[$i]); $j++) {
        echo $mArray[$i][$j];
    }
}

if($a < 10) {
    $b = 1 * 2;

    if($b < 3) {
        $c = 3 * 2;
    }
}

if($b < 3) {

}

/* 0 ----
     0 // a
     1 // b
     2 // c
1 ----
     0 // d
     1 // e
     2 // f
*/









