<?php

/**
 * Overwatch
 * the final class 
 * takes all information from all generators and
 * makes a string concat
 * Goal of this Class is to call all other classes
 * Assign those classes to properties and
 * use THAT->getter to assign the value to THIS Classes property
 * 
 * If we build mult properties we have to Get them seperatly out of that class
 * 
 */
class DndNpcRng
{
    /**
     * Call Overwatch.
     * The function that calls all other classes and methods
     * finally creating a full RNG piece of text.
     */
    private function __construct()
    {
        $this->new_npc = self::_dndRngNpc();
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getNewNpc()
    {
        return $this->new_npc;
    }


    /**
     * Method to call all classes and use or acces properties
     * 
     * @return string
     */
    private function _dndRngNpc()
    {
        // gender race age
        // OBJECT == new Class
        //property is Class, not value of class, not a return function
        // THIS OBJECT == class->get Object Value of THAT Class

        //class
        $this->npcClass = new NpcClass();
        $this->npcClass = $this->npcClass->getNpcClass();

        //--- nouns
        $this->new_npc = new Gender();
        $this->manWoman = $this->new_npc->getManWoman();
        $this->heshe = $this->new_npc->getHeShe();
        $this->hisher = $this->new_npc->getHisHer();
        $this->gender = $this->new_npc->getGender();

        $this->dndrace = new Race();
        $this->raceorigin = $this->dndrace->getRaceorigin();
        $this->dndrace = $this->dndrace->getRace();

        $this->age = new Age();
        $this->age = $this->age->getAge();



        //name [requires a race]
        //$this->name = new Name(); the constructor requires 4 values 
        // -> explore to make users enter their own name.
        //pass object to class method, allows to pass multiple properties
        // pass race to Name so it can sort what race naming class should be calles
        $this->name = new Name($this->dndrace);
        $this->firstname = $this->name->getFirstname();
        $this->lastname = $this->name->getLastname();
        $this->nickname = $this->name->getNickname();
        $this->description = $this->name->getDescription();


        //body {also public method}
        $this->body = new BodiesGenerator();
        //---body
        $this->bodytype = $this->body->getBodyType();
        $this->bodysize = $this->body->getBodySize();
        $this->bodyshape = $this->body->getBodyShape();

        //face
        $this->face = new ProfileGenerator(
            $this->dndrace, $this->new_npc, $this->npcClass
        );
        /**
         This face = this face [getter]
         */

        //Mood == Sentence
        $this->mood = new MoodGenerator();
        $this->mood = $this->mood->getMood();

        //scars 
        $this->scar = new ScarsGenerator($this->new_npc);
        $this->scar1 = $this->scar->getScar();
        $this->scar = new ScarsGenerator($this->new_npc);
        $this->scar2 = $this->scar->getScar();
        $this->scar = new ScarsGenerator($this->new_npc);
        $this->scar3 = $this->scar->getScar();

        //npc_wardrobe-by-wealth +npc_wardrobe
        $this->outfit = new ProsperityGenerator($this->heshe);
        $this->intro = $this->outfit->getIntro();
        $this->outfit = $this->outfit->getOutfit();

        // this->weapon == full sentence
        $this->weapon = new WeaponsGenerator($this->dndrace);
        $this->weapon = $this->weapon->getArms();
    }
}
//---create object
$new_npc = new DndNpcRng();



/**
 String Concat and Results Printer
 */




//-------------------------------------------------------subject array
$randsubject = [
    " the  " . $this->dndrace . "",
    " this " . $this->gender,
    $this->gender->getHeShe(),
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
    $this->gender->getGender() . " " .
    $new_npc->Race::getRace()  . " " . $new_npc->npcClass->getNpcClass()
    . " thats about " . $new_npc->Age::getAge() . " years old, " .
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
$outfit = $this->manWoman .
    " " . $new_npc->outfit->ProsperityGenerator::getOutfit() .
    " " . Belts::belt() . ". " .
    $new_npc->hat->getHat() . Shoes::shoes() .
    "The " . $this->gender->getManWoman() . " " .
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
