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
    private $dndrace; // sets random race
    private $raceorigin; // sets origin to the dndrace
    private $heritage; // exceptions != $this->raceorigin, so RNG new heritage


    // Race RNG  
    private function __construct()
    {
        $this->dndrace = self::randomRace(); //new race() is by default a random race
        $this->heritage = self::setHeritage();
    }

    private function raceArray()
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

    private function updateRaceArray()
    {
        if ($this->dndrace == "drow") { // Drow is offical, but not on webpage, Elf-Subclass, if input === "Drow" then != homebrew
            $racesArray[] = self::raceArray();
            $racesArray[] = "Drow"; //add Drow to Race Array, logically after cleaning because array is RETURNED
            return $racesArray;
        }
    }

    private function randomFromRaceArray()
    {
        $RacesArray = self::raceArray();
        $random = array_rand(array_flip($RacesArray), 1); //random
        return $random;
    }
    //------------------------------------RACE getter/setter
    private function randomRace()
    {
        $this->dndrace  = self::randomFromRaceArray(); //random
        $this->raceorigin = $this->dndrace;
        $_POST['commonrace'] = $this->dndrace; 
        return $_POST['commonrace'];
    }

    private function setRace()// hard setter for user input
    {
        $this->dndrace = new Homebrew;
        $this->dndrace = $this->dndrace->getHomebrewRace();
        $this->raceorigin = self::setHeritage();
        $this->racesArray = self::updateRaceArray();
    }

    public function getRace()
    {
        return $this->dndrace;
    }

    public function getRaceorigin()
    {
        return $this->raceorigin;
    }


    //------------------------------------------------HERITAGE getter/setter
    //random origin selector used on NAMES.inc
    private function setHeritage()
    {
        $this->heritage = self::raceArray();
        while (
            $this->heritage == "Genasi"
            || $this->heritage == "Yuan-Ti Pureblood"
            || $this->heritage == "Simic Hybrid"
        ) {
            $this->heritage = self::raceArray();
        }
    }

    public function getHeritage()
    {
        return $this->heritage;
    }
}
