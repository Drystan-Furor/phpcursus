<?php

/**
 * Jewelry
 */

class Jewelry
{
    var $jewel;

    private function __construct()
    {
        $this->jewel = self::craftJewel();
    }

    private static function jewelryTypes()
    {
        $jewelrytypes = [
            'necklace',
            'necklace with a locket',
            'necklace with a gemstone pendant',
            'chain',
            'ring',
            'locket',
            'bracelet',
            'spiral bracelet',
            'arm cuff',
            'upper arm bracelet',
            'arm band',
            'armlet',
            'bangle',
        ];
        $jewelryType = array_rand(array_flip($jewelrytypes), 1);
        return $jewelryType;
    }

    private static function craftJewel()
    {
        $jewelmaterial = MaterialGenerator::getMetalType();
        $jewelgemstone = MaterialGenerator::getGemstoneType();
        $jewelrytype = self::jewelryTypes();

        $jewel = $jewelmaterial . " " . $jewelrytype .
            " set with a " . $jewelgemstone;

        return $jewel;
    }

    public function getJewel()
    {
        return $this->jewel;
    }
}
