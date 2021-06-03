<?php
require_once 'classes/Hotel/Clock.php';

$clock = new Clock;

$runDays = 1;

$tocks = array();

$i = 0;

while($clock->getDay() <= $runDays) {
    $clock->tick();

    $tocks[] = $i;

    foreach($tocks as $key => $tock) {
        if($tock > 5) {
            unset($tocks[$key]);
        }
    }  

    $i++;

    print_r($tocks);
}