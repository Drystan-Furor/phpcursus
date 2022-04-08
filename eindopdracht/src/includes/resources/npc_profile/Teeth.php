<?php

/**
 * Teeth
 */

class Teeth
{
    /**
     * Grow some whiskers
     */
    private function __construct()
    {
        $this->teeth = self::_dentalWorks();
    }

    /**
     * Array of types
     * 
     * @return dentals
     */
    private static function _teethTypes()
    {
        $teethTypes = [
            'rotten ', 'shiny white', 'yellow', 'buck', 'quite large',
            'rather small', 'yellow and grey', 'crooked', 'canine whiskers',
        ];
        $teethType = array_rand(array_flip($teethTypes), 1);
        return $teethType;
    }

    /**
     * Array of sentence-part
     * 
     * @return string
     */
    private function _dentalWorks()
    {
        $quality = Verbsgenerator::quality();
        $metal = MaterialGenerator::getMetalType();
        $teethType = self::_teethTypes();

        $dentalwork = [
            "is missing a tooth", "is missing several teeth",

            "has a " . $metal . " tooth",

            "has several " . $metal . " teeth",

            "has " . $teethType . " teeth", "has no teeth at all",

            "has good dentals", "has yellow teeth, but all there",

            "has fairly good dentals",

            "has " . $teethType . " teeth that could use some bracers",

            "has no regular teeth but canine whiskers",

            "has good dentals", "has rather bad dentals",

            "has sharp edged teeth, as if they are trimmed or filed",

            "has fake teeth, like a prosthetic made of " . $quality . " "
                . $metal,
        ];
        $teeth = array_rand(array_flip($dentalwork), 1);

        return $teeth;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getTeeth()
    {
        return $this->teeth;
    }
}

/*
$teeth = new Teeth();
$teeth = $teeth->getTeeth();
*/
