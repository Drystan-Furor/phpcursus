<?php

/**
  Scars
 */
// Scar Tissue Arrays

class Scars
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
    private static function scarLines()
    {
        $mark = Scars::scarMarkings();
        $scarlines = [
            "horizontal " . $mark,
            "vertical " . $mark,
            $mark,
            $mark,
            $mark,
            "diagonal " . $mark . ", from the left to the right",
            "diagonal " . $mark . ", from the right to the left",
        ];
        $line = array_rand(array_flip($scarlines, 1));
        return $line;
    }


    //------------------------------------------------on the X SIDE

    private static function scarSides()
    {
        $scarsides = [
            "left side", "right side", "middle",
        ];
        $side = array_rand(array_flip($scarsides, 1));
        return $side;
    }

    //-------------------------------------------------of the x LOCATION
    private static function scarLocation()
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


    private static function scar()
    {
        $line = Scars::scarLines();
        $side = Scars::scarSides();
        $loca = Scars::scarLocation();

        $scar = $line . ' ' . $side . ' ' . $loca;
        return $scar;
    }

    public function getScar()
    {
        return $this->scar;
    }
}

$scar = new Scars();
echo $scar->scar;
