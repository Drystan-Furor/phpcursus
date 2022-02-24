<?php

class SentenceGenerator
{
    public static function intro()
    {
        $observe = VerbsGenerator::getObservation();

        $intros = [
            "At a glance you $observe the ",
            "At first sight the ",
            "At a gander you $observe the ",
            "In a flash you $observe the ",
            "In a fleeting look you $observe the ",
            "While checking, you $observe the ",
        ];

        $intro = array_rand(array_flip($intros));
        return $intro; 
    }


    private function hasHat()
    {
        $hat = Hats::hasHat();
        if ($hat != "") { //---wears a hat?
            
            $hat = "The $thisGender wears $hat on $hisher head. ";
        }
    }
}
//$new_intro = SentenceGenerator::intro();

   //------------------------------------------------------beggar
   $outfit = $intro . $thisGender .
   " wears a damaged and dirty " . $garb .
   " and a partially torn " . $belt . ". " .
   $headdress .
   $feetWithShoes .
   "The $thisGender  " . $clasps . " " . $ring . ". ";

   //------------------------------------------------------poor

   $outfit = $intro . $thisGender .
   " wears a " . $garb .
   " that has " . $sleeve .
   ", and a " . $belt . ". " .
   $feetWithShoes .
   $headdress .
   "On one of $hisher fingers you see " . $ring . ". ";