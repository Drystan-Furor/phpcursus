<?php

/**
 * Rings
 */
class Rings
//-------------------------------------------rings
{
    var $ring;

    private function __construct()
    {
        $this->ring = Rings::craftRing();
    }


    private static function getComplexity()
    {
        $ringcomplexities = [
            'a ', 'a ',
            'a mundane ',
            'a plain ',
            'an intricate ',
            'an uncomplicated ',
            'a simple ',
            'a complex ',
            'a sophisticated ',
            'a baroque ',
            'a refined ',
        ];
        $ringcomplexity = array_rand(array_flip($ringcomplexities), 1);
        return $ringcomplexity;
    }

    private static function craftRing()
    {
        $ringMaterial = MaterialGenerator::getMetalType();
        $ringGemstone = MaterialGenerator::getGemstoneType();
        $ringcomplexity = Rings::getComplexity();

        $ringType = $ringcomplexity . $ringMaterial;
        $isSignetRing = rand(1, 20);
        if ($isSignetRing > 15) {
            $ringType = $ringcomplexity . $ringMaterial . " signet";
        }
        $ring = $ringType .  " ring set with a " . $ringGemstone;
        return $ring;
    }
}



//-------------------------------------------------------------------------------rings

$ringcomplexity = array_rand(array_flip($ringcomplexities), 1);
$ringGemstone = array_rand(array_flip($gemstones), 1);
$ringMaterial = array_rand(array_flip($metals), 1);
