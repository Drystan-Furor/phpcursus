<?php

/**
 * $this->homebrew [BOOLEAN]
 * [true] IF [$race != in array]
 */
class Homebrew
{
    /**
     * a Boolean check to know if Race exists in array or not
     */
    private function __construct()
    {
        $this->homebrew = false;
        $this->homebrew = self::setHomebrew();
        $this->dndrace = self::getHomebrewRace();
    }

    //------------------------------------------------------homebrew
    /** 
     * Local race variable is readline on page, 
     * allows Homebrew // && $race != 'Drow' 
     * 
     * @return UserInputRace
     */
    public function setHomebrew()
    {
        if (array_key_exists('setcommonrace', $_POST) //is button clicked
            && !$_POST['commonrace'] == "" // is it not empty string
            && !ctype_space($_POST['commonrace']) // is it NOT white spacing
            && !((bool)$_POST['commonrace'] == null) // does it exist?
        ) {
            $race = EscapeString::from_Input(($_POST['commonrace'])); //clean that input
            $race = ucwords(strtolower($race)); //-------------------ALL OF THE WORDS (caps to lower)
            $race = ucfirst(str_replace("Of", "of", $race)); //--Not All of The Words (first letter is Capitalized)
            $race = ucfirst(str_replace("The", "the", $race)); //Not All Of the Words (unless it is Hank "The" Man, "The" becomes "the")
            $race = ucfirst(str_replace("Yuan-ti", "Yuan-Ti", $race)); //Not all of the Words (In case of Yuan"-ti", we restore to Yuan-Ti)
            $raceClass = new Race();
            $raceClass = $raceClass->Race::setRace($race); //->sets race in the race class, why?
            //determine homebrew based on entry, TRUE if not in array
            $RacesArray = $raceClass->Race::raceArray();
            if (!in_array($race, $RacesArray)) {
                $this->homebrew = true; //default false on class
            }
        }
        return $race; //pass back the array with potentially Drow added
    }

    public function getHomebrew()
    {
        return $this->homebrew;
    }

    /**
     * Check if given race actually exists in Array,
     * If not, then it is a Homebrew Race
     * 
     * @param $race == dndrace
     * 
     * @return boolean
     */
    public static function isHomebrew($race)
    {
        if (!in_array($race, Race::raceArray())) {
            return true; 
        } else {
            return false;
        }
    }

    public function echoHomebrew()
    {
        if (self::getHomebrew() == true) {
            $homebrewed = "HOMEBREW";
        } else {
            $homebrewed = "";
        }
        return $homebrewed;
    }
}
