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
     * This constructor requires 4 parameters;
     * the parameters are set in Class RaceXXX;
     * Class RaceXXX calls new Name(1,2,3,4);
     * This class generates the object properties;
     * this class is called by subclasses that extend this class.
     * all races are subclasses of this class;
     * the new_npc is designated with the generateName function;
     * 
     * @param $firstname 
     * 
     */
    private function __construct($lastname, $firstname, $nickname, $description)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->nickname = $nickname;
        $this->description = $description;
    } //object name exists

    

    /**
     * Name based on Race
     * verify that the name will NOT be grnerated If
     * race == genasi.
     */
    public static function generateName($race) //pass the object to the function
    {
        //address the exceptions of races first
        if ($race->getRace() == "Genasi"
            || $race->getRaceorigin() == "Genasi"
            || $race->getHomebrew() == true
        ) {
            $raceName = $race->getHeritage();
            //include_once 'includes/dndraces/' . $raceName . '.php'; 
        } else {
            $raceName = $race->getRace();
        }
        // ELSE == ALL other scenario's

        $raceName = strtolower($raceName);              //no caps's in filename
        $raceName = str_replace(' ', '', $raceName);    //no spaces in filename
        $raceName = str_replace('-', '', $raceName);    //no dashes in filename
        $raceName = new $raceName();    //new aarakocra() [example]
        //include_once 'includes/dndraces/' . $raceName . '.php'; // call script
        $lastname = $raceName::getLastname();
        $firstname = $raceName::getFirstname();
        $nickname = $raceName::getNickname();
        $description = $raceName::getDescription();
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