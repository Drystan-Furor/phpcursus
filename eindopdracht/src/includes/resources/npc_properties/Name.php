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

    /*
    this constructor requires 4 parameters;
    the parameters are set in Class RaceXXX;
    Class RaceXXX calls new Name(1,2,3,4);
    This class generates the object properties;
    this class is called by subclasses that extend this class.
    all races are subclasses of this class;
    the new_npc is designated with the generateName function;
    */
    private function __construct($lastname, $firstname, $nickname, $description)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->nickname = $nickname;
        $this->description = $description;
    } //object name exists

    

    public static function generateName($new_npc) //pass the object to the function
    {
        if ($new_npc->race->getRace() == "Genasi"
            || $new_npc->race->getHeritage() == "Genasi"
            || $new_npc->race->getHomebrew() == true
        ) {
            $raceName = $new_npc->race->getHeritage();//ultimately return a string here
            //include_once 'includes/dndraces/' . $this->heritage . '.php'; // call script
        } else {
            $raceName = $new_npc->race->getRace();//ultimately return a string here
        }
        $raceName = strtolower($raceName);              //no caps's in filename
        $raceName = str_replace(' ', '', $raceName);    //no spaces in filename
        $raceName = str_replace('-', '', $raceName);    //no dashes in filename
        $raceName = new $raceName();    //makes all races into class call
        //include_once 'includes/dndraces/' . $raceName . '.php'; // call script
    }

    public function getFirstname() 
    {
        return $this->firstname;
    }

    public function getLastname() 
    {
        return $this->lastname;
    }

    public function getNickname() 
    {
        return $this->nickname;
    }

    public function getDescription() 
    {
        return $this->description;
    }
}
/*
Name::getFirstname();
*/