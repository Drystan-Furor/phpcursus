<?php

/** 
 Describe outfit, get items from array wardrobes
 */


// shoe == var + shoe ==// satyr shoe ="";

// about wardrobes
class OutfitGenerator
{

}

/*
bouw de outfit...
dee string is mult {public functions}
kan ook elders gedaan worden 
dit is een string concat op basis van variable sentence
sentence building IN ProsperityClass
dan alleen ophalen outfit of intro
string concat dan in DndRngNpc() over $this->new_npc


*/

   //------------------------------------------------------poor

   $outfit = $intro . $thisGender .
   " wears a " . $garb .
   " that has " . $sleeve .
   ", and a " . $belt . ". " .
   $feetWithShoes .
   $headdress .
   "On one of $hisher fingers you see " . $ring . ". ";


//------------------------prosperous

$outfit = $intro . $thisGender .
" wears a " . $garb .
" with " . $clothingDetail . " that has " . $sleeve . ". " .
$headdress .
"Finalized with a " . $belt . ". " .
$feetWithShoes .
"The light reflects on a " . $jewel . ". ";







//------------------------------------------------------rich


    $clotharray = rand(1, 2);
    if ($clotharray == 1) {
        $outfit = $intro . $thisGender .
            " wears a " . $garb .
            " featuring " . $richDetail .
            " with " . $clothingDetail .
            ". Completed with a" . $belt . ". " .
            $feetWithShoes .
            ". You notice " . $ring . ". ";
    } else if ($clotharray == 2) {
        $outfit = $intro . $thisGender .
            " wears a " . $ensemble .
            " with " . $clothingDetail .
            " that has " . $sleeve .
            $feetWithShoes .
            $headdress .
            "Your eye catches a " . $jewel . ". ";
    }



//------------------LOADED
//------------------------------------------------------loaded


$outfit = $intro .  $thisGender .
" as $heshe wears a very fine " . $ensemble .
" featuring " . $LoadedDetail .
". With " . $clothingDetail . " that has " . $sleeve .
". Perfected with a " . $belt . ". ".
$feetWithShoes .
$headdress .
"Glimmering in the light you see " . $ring .
", extravagant and valuable. " .
"And $heshe is also adorned with a prestigious, fancy " . $jewel . ". ";
