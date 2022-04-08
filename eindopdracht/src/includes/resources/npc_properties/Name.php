<?php

/**
 * Based on the RNG Race, we want to call the specific RACE CLASS
 * This allows race-specific names to be assigned in detail
 * this class prepares the generated value from Object->race 
 * to be parsed as the name of the file.
 * 
 * No if == X then X = new Class() foreach race.
 * A lot of scripting is saved thru this method.
 * 
 * Only the designated Race Class is called upon 
 * All other Race Classes remain unused on 1 instance of rng npc.
 */
class Name extends Race
{
    protected $firstname = "Ernest";
    protected $nickname = "Gary";
    protected $lastname = "Gygax";
    protected $description = " was an American game designer 
    and author best known for co-creating the pioneering role-playing game 
     Dungeons & Dragons (D&D) with Dave Arneson.";

    /**
     * Construct a name based on race/heritage
     * 
     * @param $race   == dndrace
     * @param $origin == race origin / hertiage 
     */
    private function __construct($race)
    {
        $this->biography = self::_generateName($race);
    } //object name exists

    
    /**
     * Name based on Race
     * Check if Homebrew
     * Set call to RNG Origin if Homebrew
     * 
     * @param $race == dndrace
     * 
     * @return raceClass()
     */
    private function _generateName($race) 
    {
        //address the exceptions of races first
        if (Homebrew::isHomebrew($race) == true) {
            $raceName = Race::setHeritage(); 
            //Homebrews get a RNG origin to generate names
        } else {
            $raceName = $race;
        }
        // ELSE == ALL other scenario's

        $raceName = strtolower($raceName);              //no caps's in filename
        $raceName = str_replace(' ', '', $raceName);    //no spaces in filename
        $raceName = str_replace('-', '', $raceName);    //no dashes in filename
        $raceName = new $raceName();    //new aarakocra() [example]
        //include_once 'includes/dndraces/' . $raceName . '.php'; // call script
        $this->lastname = $raceName::getLastname();
        $this->firstname = $raceName::getFirstname();
        $this->nickname = $raceName::getNickname();
        $this->description = $raceName::getDescription();
    }


    /**
     * Getter
     * 
     * @return this object
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getNickname()
    {
        return $this->nickname;
    }


    /**
     * Getter
     * 
     * @return this object
     */
    public function getDescription()
    {
        return $this->description;
    }
}
/*
Name::getFirstname();
*/