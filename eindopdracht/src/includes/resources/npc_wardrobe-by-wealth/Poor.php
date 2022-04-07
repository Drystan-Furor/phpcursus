<?php

/**
 Rng how wealthy one is, generate wardrobe array's on Boolean
 */

class Poor
{
    /**
     * Construct an outfit
     * and a sentence based on this class outfit 
     */
    private function __construct()
    {
        $this->outfit = self::clothes();
        $this->intro = self::intros();
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
        $outfit = self::outfits();
        $textile = self::textiles();
        $textile2 = self::textiles();

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
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }


    //-------------------------------------INTRO
    private function intros()
    {
        $wealthinessTypes = [
            'who looks rather self.',
            'who seems to be penniless.', 'that looks quite impoverished.',
            'who recently became bankrupt.', ' looking poverty-stricken at best.',
            'who looks underpriviliged.', 'who makes a down-and-out impression.',
        ];
        $intro = array_rand(array_flip($wealthinessTypes), 1);
        return $intro;
    }


    /**
     * Getter
     * 
     * @return this object
     */
    public function getOutfit()
    {
        return $this->outfit;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getIntro()
    {
        return $this->intro;
    }
}






