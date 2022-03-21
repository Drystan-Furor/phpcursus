<?php

class Belts
{
    private $belt;

    private function __construct()
    {
        $this->belt = self::belt();
    }

    private static function beltitem()
    {
        $beltitems = [
            rand(3, 9) . ' small bottles',
            rand(2, 6) . ' throwing daggers',
            rand(4, 12) . ' throwing darts',
            rand(2, 5) . ' vials with red liquid',
            rand(2, 5) . ' small pouches',
            rand(10, 40) . ' feet of rope',
            'a book', 'a purse', 'a large tome', 'a small knife',
            'a sash', 'some lockpicks', 'an Abacus', 'a crowbar',
            'a waterskin', 'a hooded lantern', "carpenter's tools",
            'a cylindrical leather case', 'a grappling hook', "a healer's kit",
            'a magniffying glass', 'a leather-bound tome',
            'a spyglass', 'a dangling censer', 'a drinking horn',
            'an iron flask', 'a boomerang', 'ten pouches',
        ];
        $beltitem = array_rand($beltitems, 5);
        return $beltitem;
    }

    private static function beltmaterial()
    {
        $beltmaterial = [
            'cloth', 'cowhide leather', 'full-grain calfskin leather',
            'braided leather', 'tooled leather', 'suede', 'rope',
            'studded leather',
        ];
        $beltmaterial = array_rand($beltmaterial, 3);
        return $beltmaterial;
    }

    private static function beltFashion()
    {
        $beltfashion = [
            'embroidered', 'plain', 'smooth', 'simple',
            'traditional', 'common',
        ];
        $beltfashion = array_rand($beltfashion, 3);
        return $beltfashion;
    }

    public static function belt()
    {
        $metal = MaterialGenerator::getMetalType();
    
        // array of mixed vars from arrays.
        $belts = [
            //belt + buckle
            self::beltFashion() . " " . self::beltmaterial() . " 
            belt with a " . $metal . " buckle",
            // buckled belt
            $metal . " buckled " . self::beltFashion() . " 
            " . self::beltmaterial() . " belt",
    
            //belt + item
            self::beltFashion() . " " . self::beltmaterial() . " belt
            with " . self::beltitem() . " strapped to it",
            //belt + 2 items
            self::beltFashion() . " " . self::beltmaterial() . " belt
            with " . self::beltitem() . " and " . self::beltitem() . " 
            strapped to it",
            // belt + 3 items
            self::beltFashion() . " " . self::beltmaterial() . " belt
            used to hold  " . self::beltitem() . ",  " . self::beltitem() . "
            and  " . self::beltitem(),
    
            //belt + item && belt 2 + item2
            self::beltFashion() . " " . self::beltmaterial() . " belt
            with " . self::beltitem() . " strapped to it and another "
            . self::beltFashion() . " " . self::beltmaterial() . " 
            belt holding " . self::beltitem(),
    
    
            //BANDOLIERS
            self::beltFashion() . " " . self::beltmaterial() . " 
            bandolier with " . self::beltitem() . ", " . self::beltitem() . "
            and " . self::beltitem() . " attached to it",
            //belt + item && bandolier + 2 item
            self::beltFashion() . " " . self::beltmaterial() . " belt
            holding " . self::beltitem() . " and a " . self::beltFashion() .
            " " . self::beltmaterial() . " bandolier with a "
             . $metal . " buckle holding "
             . self::beltitem() . " and " . self::beltitem(),
        ];
        //pregenerated belt selector
        $belt = array_rand(array_flip($belts), 1);
        return $belt;
    }

    public function getBelt()
    {
        return $this->belt;
    }
}
