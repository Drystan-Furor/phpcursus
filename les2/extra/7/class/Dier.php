<?php

class Dier 
{
    private $ogen; 
    private $gedrag;
    private $poten;
    private $grootte; 

    protected $soort;
    
    const LEEFT = 'leeft';

    const ACTIE_SLAAPT = 'slaapt';
    const ACTIE_ZWEMT = 'zwemt';
    const ACTIE_LOOPT = 'loopt';
    const ACTIE_RENT = 'rent';
    const ACTIE_VLIEGT = 'vliegt';

    protected $huidigeActie;
   
    public function __construct($soort, $ogen, $gedrag = '', $poten = '', $grootte = '') {
        $this->ogen = $ogen;
        $this->soort = $soort;
        $this->poten = $poten;
        
        $this->huidigeActie = self::ACTIE_SLAAPT;
    }

    protected function slapen() {
        $this->huidigeActie = self::ACTIE_SLAAPT;
    }

    protected function lopen() {
        $this->huidigeActie = self::ACTIE_LOOPT;
    }
    
    protected function vliegen() {
        $this->huidigeActie = self::ACTIE_VLIEGT;
    }

    public function tonen() {
        echo 'De ' . $this->soort . ' heeft ' . $this->ogen . ' ogen' . PHP_EOL;

        echo 'Heeft ' . $this->poten . ' poten.' . PHP_EOL;

        echo 'Dit dier ' . self::LEEFT . ' en ' . $this->huidigeActie . '.' . PHP_EOL;
    }
}