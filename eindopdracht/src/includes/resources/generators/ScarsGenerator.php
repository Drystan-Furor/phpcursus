<?php

/**
  Scars
 */
// Scar Tissue Arrays

class ScarsGenerator
{
    var $scar;

    private function __construct()
    {
        $this->scar = self::scar();
    }

    private static function scarMarkings()
    {
        //------------------------------------------------------has a SCAR
        $markings = [
            'scar', 'cut', 'bruise', 'laceration', 'graze', 'claw mark',
            'birth mark', 'wound', 'jab', 'bruise', 'scratch',
        ];
        $mark = array_rand(array_flip($markings, 1));
        return $mark;
    }

    //------------------------------------------------------has a VAR scar
    public static function scarLines()
    {
        $mark = self::scarMarkings();
        $scarlines = [
            "horizontal " . $mark,
            "vertical " . $mark,
            $mark,
            "diagonal " . $mark . ", from the left to the right",
            "diagonal " . $mark . ", from the right to the left",
        ];
        $line = array_rand(array_flip($scarlines, 1));
        return $line;
    }


    //------------------------------------------------on the X SIDE

    public static function scarSides()
    {
        $scarsides = [
            "left side", "right side", "middle",
        ];
        $side = array_rand(array_flip($scarsides, 1));
        return $side;
    }

    //-------------------------------------------------of the x LOCATION
    public static function scarLocation()
    {
        $scarlocations = [
            "left cheek",   "right cheeck",
            "left temple",  "right temple",
            "left eye",     "right eye",
            "left ear",     "right ear",
            "left eyebrow", "right eyebrow",
            "jaw", "forehead", "chin",
            "nose", "mouth", "throat",
        ];
        $location = array_rand(array_flip($scarlocations));
        return $location;
    }

    //---------------------- full sentence
    public static function scar($new_npc)
    {
        $hasScar = rand(1, 2);
        if ($hasScar == 1) {
            $scar = "You " . VerbsGenerator::getObservation() . " " .
                $new_npc->Gender::getHeShe() . " has a " .
                ScarsGenerator::scarLines() . ' on the ' .
                ScarsGenerator::scarSides() . ' of ' .
                $new_npc->Gender::getHisHer() . " " .
                ScarsGenerator::scarLocation() . ". ";;
        } else {
            $scar = "";
        }
        return $scar;
    } 

    public function getScar()
    {
        return $this->scar;
    }

}

/*
$scar = new ScarsGenerator();
echo $scar->getScar();
*/