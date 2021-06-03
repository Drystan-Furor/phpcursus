<?php
require_once 'classes/Hotel/Clock.php';
require_once 'classes/ArrivalFactory.php';
require_once 'classes/Role/Guest.php';
require_once 'classes/Role/Receptionist.php';
require_once 'classes/Hotel/Lobby.php';
require_once 'classes/Hotel/Hotel.php';
require_once 'classes/Hotel/CashRegister.php';
require_once 'classes/Console.php';

$arrivalFactory = new ArrivalFactory;

$runDays = 1;

$hotel = new Hotel( 
    new CashRegister(), 
    new Lobby( new Receptionist() ) );

$clock = new Clock();

while($clock->getDay() <= $runDays) {
    $clock->tick();

    $clock->print();
    
    $guests = $arrivalFactory->make($clock);

    foreach($guests as $key => $guest) {
        $guest->setClock($clock);
        $hotel->run($guest, $guests);
    }

    $hotel->setGuests($guests);
    $hotel->print();
}