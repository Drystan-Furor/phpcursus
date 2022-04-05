<?php

/**
 * the final class 
 * takes all information from all generators and
 * makes a string concat
 * 
 */
class DndNpcRng
{
    private $gender;
    private $dndrace;
    private $age;
    private $name;

    private $body;
    private $face;
    private $mood;
    private $outfit; // -> new class building outfit

    private $npcClass;

    private function __construct()
    {
        $this->new_npc = self::dndRngNpc();
    }

    public function getNewNpc()
    {
        return $this->new_npc;
    }

    private function dndRngNpc()
    {
        // gender race age
        $this->gender = new Gender();
        $this->dndrace = new Race(); //property is Class, not value of class, not a return function
        $this->age = new Age();

        //name [generated after race is defined]
        $this->name = Name::generateName($this->new_npc); //pass object to class method, allows to pass multiple properties
        //$this->name = Name::generateName($this->new_npc->dndrace->getRace()); //pass race from getter
        // would be exceptional if we did not need to access > 1 properties
        //$this->name = new Name(); the constructor requires 4 values -> explore to make users enter their own name.

        //body {also public method}
        $this->body = new BodiesGenerator();

        //face
        $this->face = new ProfileGenerator();

        //Mood
        $this->mood = new MoodGenerator();

        //scars 

        //wealth
        $this->outfit = new ProsperityGenerator();
        // outfit = new ProsperityGenerator
        //outfit --> shoulkd be generated in each wealth class, make getter full sentence
        // outfit is based on wealth, so we don't RNG wealth, but we RNG outfit who getsWealth from class
        // wealth is therefore not rng in main class
        // so outfit is automatically wealth

        //Hat
        $this->hat = new Hats();
        //Belt

        //Shoes

        // jewel / ring

        // weapon

        //class
        $this->npcClass = new NpcClass();

    }


}
//---create object
$new_npc = new DndNpcRng();
//--- class
$npcClass = $new_npc->npcClass->getNpcClass();
//---race age
$race = $new_npc->dndacee->Race::getRace(); // <-- GETS RACE
$age = $new_npc->age->Age::getAge();
//--- nouns
$gender = $new_npc->Gender::getGender();
$manWoman = $new_npc->Gender::getManWoman();
$heshe = $new_npc->Gender::getHeShe();
$hisher = $new_npc->Gender::getHisHer();
//---body
$bodytype = $new_npc->body->BodiesGenerator::getBodyType();
$bodysize = $new_npc->body->BodiesGenerator::getBodySize();
$bodyshape = $new_npc->body->BodiesGenerator::getBodyShape();
//---face
$eyes = $new_npc->eyes->ProfileGenerator::getEyes(); //is this the way?
$nose = $new_npc->nose->ProfileGenerator::getNose();
$mouth = $new_npc->mouth->ProfileGenerator::getMouth();
$teeth = $new_npc->teeth->ProfileGenerator::getTeeth();
$chin = $new_npc->chin->ProfileGenerator::getChin();
//---outfit
$outfit = $new_npc->outfit->ProsperityGenerator::getOutfit();
$intro = $new_npc->outfit->ProsperityGenerator::getIntro();



/**
 String Concat and Results Printer
 */




//-------------------------------------------------------subject array
$randsubject = [
    " the  " . $new_npc->Race::getRace() . "",
    " this " . $new_npc->Gender::getManWoman(),
     $new_npc->Gender::getHeShe(),
    " $nickname",
];
$subject = array_rand(array_flip($randsubject), 1);




//-------------------------------------------------------------------string concat

//BioName
$nameofthisNPC =  "You meet " . $firstname . " " . $lastname . ". ";    //-------NAME
// {generrateee npc, getRace call script get name}
// return from scriptcaller race

//BioGenderRaceAge
//--BODY GENDER AGE WEALTH DIVERGENCE
/*
A medium sized female Drow Druid thats about 46 years old, who looks priviliged.
  {bodysize}   {noun}{race}{class}          {age}           {prosperity intro}
*/
$genraceage = "A " . $new_npc->body->BodiesGenerator::getBodySize() . " " .
    $new_npc->Gender::getGender() . " " .
    $new_npc->Race::getRace()  . " " . $new_npc->npcClass->getNpcClass()
    . " thats about " . $new_npc->Age::getAge() . " years old, ".
    $new_npc->intro->ProsperityGenerator::getIntro();
// wealth divergence

//----------------------------------------------------------------facial construction
/* You SEE
this MAN has
NOSE. 
The RACE meets your gaze with
EYES
As you seize up the MAN you 
SEE HE has
CHIN
and HIS mouth is set with
MOUTH.

*/
//---- see face
$face =  " You " . VerbsGenerator::getObservation() .                   
    " this " . $new_npc->gender->Gender::getManWoman() . " has " .
    $new_npc->ProfileGenerator::getNose() .//see nose
    "The " . $new_npc->npcClass->getNpcClass() . " meets your gaze with " .
    $new_npc->ProfileGenerator::getEyes() .// see eyes
    "As you seize up the " . $new_npc->Gender::getManWoman() . ", you " .
    VerbsGenerator::getObservation() . " " . $new_npc->gender->Gender::getHeShe() . " has " .
    $new_npc->ProfileGenerator::getChin() .//see chin
    " and " . $new_npc->Gender::getHisHer() . " mouth is set with " .
    $new_npc->ProfileGenerator::getMouth() . ". ";//see mouth

$dentals = "When the " . $new_npc->Race::getRace() . " is talking or shouting, you "
    . VerbsGenerator::getObservation() . " " . $new_npc->Gender::getHeShe() .
    " " . $new_npc->ProfileGenerator::getTeeth() . ". ";//see teeth

//--------------------------------------------------------------see scars

$scar = ScarsGenerator::scar($new_npc) .
        ScarsGenerator::scar($new_npc) .
        ScarsGenerator::scar($new_npc);

//------  -see body
$body = " Built " . $new_npc->body->BodiesGenerator::getBodyType() . ", "
    . $new_npc->gender->Gender::getHeShe() .
    " has a " . $new_npc->gender->Gender::getGender() . " .
    body with " . 
    $new_npc->body->BodiesGenerator::getBodyShape() . ". ";                         
//--------------------------------------------------------------see outfit
$outfit = $new_npc->Gender::getManWoman() .
" " . $new_npc->outfit->ProsperityGenerator::getOutfit() .
" " . Belts::belt() . ". " .
$new_npc->hat->getHat() .Shoes::shoes() .
"The " . $new_npc->Gender::getManWoman() . " " .
VerbsGenerator::getClasping() . " " . Rings::craftRing() . ". ";



//--------------------------------------------------------------see mood
$mood = $nickname . " seems to be in a " . MoodGenerator::generateMood() . " mood. ";



//-----------------------------------------------------------------see weapon
$holdweapon = "You also " . VerbsGenerator::getObservation() . " " . $subject .
    " " . WeaponsGenerator::holding() . " a " . 
    WeaponsGenerator::weapon() . ". ";                  


//------------------------------------------------------------------- print results
$randomizednpcresult = $nameofthisNPC . $genraceage . $face . $dentals .
    $scar . $body . $outfit . $profile . $holdweapon . PHP_EOL;

/** 
 counter of website visits
 counter of ## rng's created 
 foolproof form ??


 beards??? array, random, assign to dwarves. perhaps others?
 or beard / chin, if not beard chin = ""; otherwise NO chin but beard.
 */
