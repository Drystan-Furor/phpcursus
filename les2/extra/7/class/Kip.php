<?php

class Kip extends Dier 
{
    public function __construct() {
        parent::__construct('Kip', 2);
    }

    public function tokt() {
        echo $this->soort . ' is aan het tokken.';
    }

    public function vliegen() {
        parent::vliegen();
    }
}