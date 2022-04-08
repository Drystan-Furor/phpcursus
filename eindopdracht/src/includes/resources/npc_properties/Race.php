<?php

/**
Racegenerator
 */
//require_once 'functions.php';

/** 
  Race
  vars:     $dndrace        [string]    {random} from [array]
            $raceorigin     [string]    {random} from [array] && [==$dndrace]
            $heritage       [string]    {random} from [array] && !exceptions
            $race           [string]    [var] FROM [filter]{input}

 */

class Race
{
    /** 
     * Race RNG 
     * new race() is by default a random race
     */  
    private function __construct()
    {
        $this->dndrace = self::_randomRace(); 
        $this->raceorigin = self::_setHeritage();
    }


    /**
     * Here we create a list of all the races.
     * 
     * @return array list
     */
    public static function raceArray()
    {
        //----------------------------------------------------dndraces array
        $RacesArray = [
            "Dragonborn", "Dwarf", "Elf", "Gnome", "Half-Elf", "Halfling",
            "Half Orc", "Human", "Tiefling", "Orc of Exandria", "Leonin",
            "Satyr", "Aarakocra", "Genasi", "Goliath", "Aasimar", "Bugbear",
            "Firbolg", "Goblin", "Hobgoblin", "Kenku", "Kobold", "Lizardfolk",
            "Orc", "Tabaxi", "Triton", "Yuan-Ti Pureblood", "Feral Tiefling",
            "Tortle", "Khalastar", "Changeling", "Orc of Eberron", "Shifter",
            "Warforged", "Gith", "Centaur", "Loxodon", "Minotaur",
            "Simic Hybrid", "Vedalkan", "Verdan", "Locathah", "Owlfolk",
            "Rabbitfolk",
        ];
        return $RacesArray;
    }


    /**
     * Drow is offical, but not on webpage, Elf-Subclass, 
     * if input === "Drow" then != homebrew
     * add Drow to Race Array, logically after cleaning because array is RETURNED
     * 
     * @param $dndrace == value to be checked IF == DROW
     * 
     * @return updated raceArray
     */
    protected function updateRaceArray($dndrace)
    {
        if ($dndrace == "drow") { 
            $racesArray[] = self::raceArray();
            $racesArray[] = "Drow"; 
            return $racesArray;
        }
    }

    /**
     * Get 1 random value of the whole raceArray
     * 
     * @return random value of raceArray
     */
    private function _randomFromRaceArray()
    {
        $RacesArray = self::raceArray();
        $random = array_rand(array_flip($RacesArray), 1); //random
        return $random;
    }

    //------------------------------------DEFAULT RACE getter/setter
    /**  
     * Function _randomRace() sets both Race and Origin to the Race Default
     * 
     * @return DEFAULT race
     */
    public static function randomRace()
    {
        $dndrace  = self::_randomFromRaceArray(); //random
        $_POST['commonrace'] = $dndrace; 

        return $_POST['commonrace'];
    }

    //------------------------------------------------HERITAGE getter/setter
    //random origin selector used on NAMES.inc

    /** 
     * Origin is defined by heritage, some races do not have 
     * ancestors of the same type. All exceptions listed here are
     * races that should not have direct ancestors of the same type. 
     * 
     * @return origin
     */
    public static function setHeritage()
    {
        $heritage = self::_randomFromRaceArray(); //random
        while (
            $heritage == "Genasi"
            || $heritage == "Yuan-Ti Pureblood"
            || $heritage == "Simic Hybrid"
        ) {
            $heritage = self::_randomFromRaceArray();
        }
 
        return $heritage;
    }




    

    /**
     * Public Race setter for FORM handling 
     * enables the user to create a custom race
     */
    public function setRace()// hard setter for user input
    {
        /** 
            THIS DOES NOT WORK LIKE THIS
            also, get and set homebrew out of Overwatch, not from Race
            setRace is a Homebrew thing
        */
        $_POST['commonrace'] = $dndrace;
        $this->dndrace = new Homebrew;
        $this->dndrace = $this->dndrace->getHomebrewRace();
        $this->raceorigin = self::_setHeritage();
        $this->racesArray = self::updateRaceArray($this->dndrace);
    }










    /**
     * Getter to acces value of dndrace variable
     * 
     * @return dndrace
     */
    public function getRace()
    {
        return $this->dndrace;
    }

    /**
     * Getter to acces value of origin variable
     * 
     * @return origin
     */
    public function getRaceorigin()
    {
        return $this->raceorigin;
    }

}
