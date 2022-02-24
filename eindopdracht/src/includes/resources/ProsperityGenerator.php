<?php
/**
 Rng how wealthy one is, 
 generate wardrobe array's on Boolean
 thus return boolean must be new Class instance
 */

class ProsperityGenerator
{

    protected $beggar;
    protected $poor;
    protected $prosperous;
    protected $rich;
    protected $loaded;

    protected function rngWealth() 
    {
        $wealth = [
            1 => $beggar = false,
            2 => $poor = false,
            3 => $prosperous = false,
            4 => $rich = false,
            5 => $loaded = false,
        ];


        $wealthiness = rand(1, 100);
        switch ($wealthiness) {
            case $wealthiness >= 1 && $wealthiness <= 15: //15% homeless
                $wealth[1] = true; // BEGGAR
                return $$wealth;//this return should be call to function
                //function should call specific class
                break;
            case $wealthiness >= 16 && $wealthiness <= 40: //24% poor
                $wealth[2] = true; // POOR
                return $$wealth;//this return should be call to function
                //function should call specific class
                break;
            case $wealthiness >= 41 && $wealthiness <= 70: //29% maderate
                $wealth[3] = true; // MODERATE
                return $$wealth;//this return should be call to function
                //function should call specific class
                break;
            case $wealthiness >= 71 && $wealthiness <= 89: //18% rich
                $wealth[4] = true; //RICH
                return $$wealth;//this return should be call to function
                //function should call specific class
                break;
            case $wealthiness >= 90 && $wealthiness <= 100: //10% noble
                $wealth[5] = true; // FILTHY RICH
                return $$wealth;
                break;
            default : 
                $wealth[2] = true; //POOR
                return $$wealth;//this return should be call to function
                //function should call specific class
                return $wealth;
                break;
        }







    }
    //search the TRUE boolean variable
    // NEEDLE in HAYSTACK
    /*
    foreach
    if boolean == true, $variable == boolean, return $variable, always the true variable 
    if EMPTY || FALSE do nothing
    */   





}