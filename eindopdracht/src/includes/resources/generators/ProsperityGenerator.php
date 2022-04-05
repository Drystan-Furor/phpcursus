<?php

/**
 Rng how wealthy one is
 */

class ProsperityGenerator
{
    private $outfit;
    private $intro;

    private function __constructor()
    {
        $wealth = rand(1, 100);
        $this->outfit = self::rngOutfit($wealth);
        $this->intro = self::rngIntro($wealth);
    }


    private function rngOutfit($wealth)
    {       
        switch ($wealth) {
            case $wealth >= 1 && $wealth <= 15: //15% homeless
                $outfit = new Beggar();
                $this->outfit = $outfit->getOutfit();   
                break;
            case $wealth >= 16 && $wealth <= 40: //24% poor
                $outfit = new Poor();
                $outfit = $outfit->getOutfit();     
                break;
            case $wealth >= 41 && $wealth <= 70: //29% maderate
                $outfit = new Prosperous(); // MODERATE
                $outfit = $outfit->getOutfit();     
                break;
            case $wealth >= 71 && $wealth <= 89: //18% rich
                $outfit = new Rich(); //RICH
                $outfit = $outfit->getOutfit();     
                break;
            case $wealth >= 90 && $wealth <= 100: //10% noble
                $outfit = new Loaded(); // FILTHY RICH
                $outfit = $outfit->getOutfit();     
                break;
            default:
                $outfit = new Poor();
                $outfit = $outfit->getOutfit();     
                break;
        }
        return $this->outfit;
    }

    private function rngIntro($wealth)
    {
        switch ($wealth) {
            case $wealth >= 1 && $wealth <= 15: //15% homeless
                $intro = new Beggar();
                $this->intro = $intro->getIntro();      
                break;
            case $wealth >= 16 && $wealth <= 40: //24% poor
                $intro = new Poor();
                $this->intro = $intro->getIntro();      
                break;
            case $wealth >= 41 && $wealth <= 70: //29% maderate
                $intro = new Prosperous(); // MODERATE
                $this->intro = $intro->getIntro();      
                break;
            case $wealth >= 71 && $wealth <= 89: //18% rich
                $intro = new Rich(); //RICH
                $this->intro = $intro->getIntro();      
                break;
            case $wealth >= 90 && $wealth <= 100: //10% noble
                $intro = new Loaded(); // FILTHY RICH
                $this->intro = $intro->getIntro();      
                break;
            default:
                $intro = new Poor();
                $this->intro = $intro->getIntro();      
                break;
        }
        return $this->intro;
    }

    public function getOutfit() 
    {
        return $this->outfit;
    }

    public function getIntro() 
    {
        return $this->intro;
    }
}