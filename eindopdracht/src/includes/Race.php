<?php

/**
INPUT control and Racegenerator
 */
//require_once 'functions.php';

/** 
  Race
  vars:     $dndrace        [string]    [array]
            $race           [string]    [var] FROM {input} OR {random}
            $raceorigin     [string]    [==$dndrace]
            $heritage       [string]    [array] NOT [!= all dndraces]
            $homebrew       [BOLEAN]    [true] IF [$race != in array]
 */

class Race
{
    var $dndrace; // sets random race
    var $raceorigin; // sets origin to the dndrace
    var $heritage; // exceptions != $this->raceorigin, so RNG new heritage
    var $homebrew; // boolean operator for function


    // Race RNG  
    private function __construct()
    {
        $this->dndrace = self::randomRace();
        $this->heritage = self::setHeritage();
        $this->homebrew = false;
    }

    private static function raceArray()
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
        $raceVariable = array_rand(array_flip($RacesArray), 1); //random
        return $raceVariable;
    }

    //------------------------------------RACE getter/setter
    private function randomRace()
    {
        $raceSelect = Race::raceArray(); // select is result of Class Method
        $this->dndrace = $raceSelect; //select is result of function, assigned to property
        $this->raceorigin = $raceSelect;
    }

    private function setRace($dndrace)// hard setter for user input
    {
        $this->dndrace = $dndrace;
        $this->raceorigin = $dndrace;
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
        $this->heritage = Race::raceArray();
        while (
            $this->heritage == "Genasi"
            || $this->heritage == "Yuan-Ti Pureblood"
            || $this->heritage == "Simic Hybrid"
        ) {
            $this->heritage = Race::raceArray();
        }
    }

    public function getHeritage()
    {
        return $this->heritage;
    }




    //------------------------------------------------------homebrew
    //** localrace variable is readline on page, allows Homebrew // && $race != 'Drow' */
    public static function setHomebrew()
    {
        if (
            array_key_exists('setcommonrace', $_POST) //is button clicked
            && !$_POST['commonrace'] == "" // is it not empty string
            && !ctype_space($_POST['commonrace']) // is it NOT white spacing
            && !((bool)$_POST['commonrace'] == null) // does it exist
        ) {
            $race = EscapeString::from_Input(($_POST['commonrace'])); //clean that input
            $race = ucwords(strtolower($race)); //-------------------ALL OF THE WORDS (caps to lower)
            $race = ucfirst(str_replace("Of", "of", $race)); //--Not All of The Words (first letter is Capitalized)
            $race = ucfirst(str_replace("The", "the", $race)); //Not All Of the Words (unless it is Hank "The" Man, "The" becomes "the")
            $race = ucfirst(str_replace("Yuan-ti", "Yuan-Ti", $race)); //Not all of the Words (In case of Yuan"-ti", we restore to Yuan-Ti)
            if ($race == "Drow") { // Drow is offical, but not on webpage, Elf-Subclass, if input === Drow it != homebrew
                $RacesArray[] = "Drow"; //add Drow to Race Array, logically after cleaning because array is RETURNED
            }

            $new_race = new Race();
            $new_race->dndrace = Race::setRace($race); //user input race is set

            if (!in_array($new_race->dndrace, $RacesArray)) { //determine homebrew based on entry, TRUE if not in array
                $new_race->homebrew = true; //default false on class
            }
        }
        return $RacesArray; //pass back the array with Drow added
    }


    //---------------------------------------------FORM DEFAULTER 
    //** if next things are: NOT, empty or NULL, then SET default */ 
    /** 
     PERHAPS THIS GOES IN ANOTHER CLASS?
     */
    public function defaultRace()
    {
        if (
            !array_key_exists('commonrace', $_POST) // is button clicked? DOES THIS WORK INSIDE FUNCTION?
            || $_POST['commonrace'] == "" //is it empty string
            || ctype_space($_POST['commonrace']) //is it white spacing, which is not NULL/ EMPTY
            || ((bool)$_POST['commonrace'] == null) //does it not exist?
        ) {
            $_POST['commonrace'] = Race::raceArray(); //set superglobal to be random race
        }
    }
}




// NAMES should go to proper designation, now let var call class
// class calls script, not procedural

//------------------------------------------------name vars to determine
$firstname = "Ernest";
$nickname = "Gary";
$lastname = "Gygax";
$divergence = "$firstname $nickname $lastname was an American game designer 
and author best known for co-creating the pioneering role-playing game 
 Dungeons & Dragons (D&D) with Dave Arneson.";

//----------------------------------------------------SCRIPT CALLER
require 'includes/scripts/age.inc.php'; // age script USES race.inc <-- make this script call a function/method call on final
// we pass age to the next scripts, so age must run...
// instead make scripts call the age function...
// pass the variable into the class

if ($dndrace == "Genasi" || $race == "Genasi" || $homebrew == true) {
    include_once 'includes/dndraces/' . $heritage . '.php'; // call script
}

if ($homebrew == false) {
    foreach ($dndraces as $chosenRace) {
        if ($chosenRace == $race) {
            $raceName = $race;
            $raceName = strtolower($raceName);              //no caps's in filename
            $raceName = str_replace(' ', '', $raceName);    //no spaces in filename
            $raceName = str_replace('-', '', $raceName);    //no dashes in filename
            include_once 'includes/dndraces/' . $raceName . '.php'; // call script
        }
    }
}
