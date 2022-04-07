<?php
class Prosperous
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
            "silk", "velvet", 'cotton', 'linen',
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'tunic', 'robe', 'gown', "doublet", 'cote hardie',
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }


    //------------------------------------build generated sentence
    private static function clothes()
    {
        $outfit = self::outfits();
        $textile = self::textiles();
        $complexity = VerbsGenerator::getComplexity();


        $clothes = [
            $complexity . " hooded " . $textile . " cloak",
            $complexity . " " . $textile . " houppelande, a full length robe like garment",
            $outfit . ", that buttons in the front to a low waist, 
            and is fitted to a " . $complexity . " bodice,",
            $outfit . ", fit closely to the body",
            "Burgundian style " . $outfit,
            $complexity . " " . $textile . " " . $outfit,
    
            $outfit . " of " . $complexity . " " . $textile,
    
            $textile . " " . $outfit .
                " similar to the clothing of the elite but made of cheaper 
                materials with less dye and ornamentation",
    
        ];
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }


    //-------------------------------------INTRO
    private function intros()
    {
        $wealthinessTypes = [
            'who seems to have some coin.',
            'who looks rather comfortable.',
            'who seems to be fortunate.',
            'that looks a bit prospering.',
            'who recently became upper-class.',
            'looking affluent at best.',
            'who looks priviliged.',
            'who seems to be doing well.',
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