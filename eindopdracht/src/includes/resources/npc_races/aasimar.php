<?php

/**
 * Aasimar are typically named in accordance with human traditions.
 */
class aasimar
{
    /**
     * Biography
     * 
     * @param $race    string
     * @param $new_npc string
     */
    private function __construct($dndrace, $new_npc)
    {
        $this->$dndrace = self::isFallen();
        $dndrace = $this->$dndrace;
        $this->isAasimar = true;
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($new_npc);
        $this->nickname = $this->firstname;
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Check if race isAasimar
     * 
     * @return boolean
     */
    public function isAasimar()
    {
        return $this->isAasimar;
    }

    /**
     * RNG if race isFallenAasimar
     * 
     * @return boolean
     */
    public function isFallen()
    {
        $isFallen = rand(1, 20);
        if ($isFallen > 14) {
            $dndrace = "Fallen Aasimar";
        }
        return $dndrace;
    }


    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'classCall', //placeholder
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @param $new_npc class of nouns (string)
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Aritian', 'Beltin', 'Cernan', 'Cronwier', 'Eran', 'Ilamin',
                'Maudril', 'Okrin', 'Parant', 'Tural', 'Wyran', 'Zaigan',
                'Hunin', 'Kyor',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Arken', 'Arsinoe', 'Davina', 'Drinma', 'Imesah', 'Masozi',
                'Nijena', 'Niramour', 'Ondrea', 'Rhialla', 'Valtyra',
                'Yasha Nydoorin', 'Reani',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
        }
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _nickname()
    {
        $nickname = $this->firstname;
        $this->nickname = $nickname;
        return $nickname;
    }

    /**
     * Array
     * 
     * @param $race    this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($race, $new_npc)
    {
        $description = "From below, the " . $race->getRace() .
            " look much like a large bird. Only 
        when " . $this->lastname . " descends to roost on a branch or walk 
        across the ground does " . $new_npc->getHisHer() .
            " humanoid appearance reveal itself.";

        return $description;
    }
}



//----------------------------------------------------------------Aasimar

if ($race == 'Aasimar') {
    $eyes = MaterialGenerator::getJewelTone() . " toned " . $eyes;
    $hairShine = $hisher . " hair has a " . MaterialGenerator::getMetalType() . " 
    shine to it with accents of " . MaterialGenerator::getMetalType();

    $divergence = $nickname . " bears the mark of $hisher celestial touch 
    through many different physical features, like " . $hairShine . ". ";
}
//------------------------------------------------------------------Fallen
if ($race == 'Fallen Aasimar') {
    $eyelights = [
        'dark', 'pale muted',
    ];
    $eyelight = array_rand(array_flip($eyelights), 1);

    $eyes = $eyelight . " " . MaterialGenerator::getJewelTone() . " toned " .
        $eyes . ", and dark spots forming under $hisher eyes";

    $hairShines = [
        'black', 'white',
    ];
    $hairwither = array_rand(array_flip($hairShines), 1);
    $hairShine = $hisher . " hair has a " . MaterialGenerator::getMetalType() . " 
    shine but withered to " . $hairShine;

    $divergence = $nickname . " bears the mark of $hisher fall 
        through many different physical features, like " . $hairShine .
        " and a very gaunt, almost corpse-like appearance";
}
//----------------------------------------------------------------------------SCRIPT
require_once 'includes/dndraces/human.php'; // call script Human
/**
 OBSOLETE
 was used to call script to get random LASTNAME. 
 NOW we should make those arrays a public static function
 then make a rand(), based on Rand, get human::lastname()
 That way we handle Aasimar completely within it's own class
 */
