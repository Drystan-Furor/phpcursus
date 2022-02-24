<?php

/**
 Rng how wealthy one is, generate wardrobe array's on Boolean
 */

class Poor
{
    var $garb;
    var $intro;

    private function __construct()
    {
        $this->garb = Poor::clothes();
        $this->intro = Poor::poorIntros();
    }


    //-------------------------------ARRAY'S for random sentence building
    private static function textiles()
    {
        $textiles = [
            'leather', 'linen', 'cotton',
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'tunic', 'robe', 'garment', "doublet",
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }


    //------------------------------------build generated sentence
    private static function clothes()
    {
        $outfit = Poor::outfits();
        $textile = Poor::textiles();
        $textile2 = Poor::textiles();

        $clothes = [
            $outfit . " made of " . $textile . ", hanging a bit loose,",
            "hooded  " . $textile . " cloak",
            "functional " . $textile . " " . $outfit,
            "short skirted " . $textile . " tunic",
            "set of simple " . $textile . " clothes",
    
            $textile . " cote hardie, that buttons in the front to a low waist 
                and is fitted to a " . $textile2 . " bodice,",
    
            $textile . " " . $outfit .
                " similar to the clothing of the elite but made of cheaper 
                    materials with less dye or ornamentation,",
    
            $textile . " apron",
        ];
        $garb = array_rand(array_flip($clothes), 1);
        return $garb;
    }


    //-------------------------------------INTRO
    private function poorIntros()
    {
        $wealthinessTypes = [
            'who looks rather poor.',
            'who seems to be penniless.', 'that looks quite impoverished.',
            'who recently became bankrupt.', ' looking poverty-stricken at best.',
            'who looks underpriviliged.', 'who makes a down-and-out impression.',
        ];
        $beggarIntro = array_rand(array_flip($wealthinessTypes), 1);
        return $beggarIntro;
    }



    public function getGarb()
    {
        return $this->garb;
    }

    public function getIntro()
    {
        return $this->intro;
    }
}






