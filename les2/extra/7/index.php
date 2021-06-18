<?php

include_once 'class/Dier.php'; 
include_once 'class/Kip.php';
include_once 'class/Leeuw.php';

$kip = new Kip();

$leeuw = new Leeuw();

$kwal = new Dier('Kwal', 5);

$spin = new Dier('Spin', 5);

$mol = new Dier('Mol', 5);

$dieren = array($kip, $leeuw, $kwal, $spin, $mol);

foreach($dieren as $dier) {
    
    if($dier instanceof Kip) {
        $dier->tokt();
        $dier->vliegen();
    }
    
    $dier->tonen();
}



