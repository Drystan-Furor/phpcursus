
<?php
class Rich
{
    /**
     * Construct an outfit
     * and a sentence based on this class outfit 
     */
    private function __construct()
    {
        $this->outfit = self::_clothes();
        $this->intro = self::_intros();
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
            'tunic', 'robe', 'costume', 'gown', "doublet", 'cote hardie',
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }


    /**
     * Build a generated sentence from arrays 
     * call to VerbsGenerator::getComplexity()
     * 
     * @return outfit
     */
    private static function _clothes()
    {
        $clothes = [
            VerbsGenerator::getComplexity() . " hooded " . 
            self::textiles() . " cloak with " . GeneralWardrobe::outfitDetails() . 
            " and it has " . GeneralWardrobe::richDetails(),

            VerbsGenerator::getComplexity() . " " . self::textiles() . 
            " houppelande, a full length robe like garment with " . GeneralWardrobe::outfitDetails() . 
            " and it has " . GeneralWardrobe::richDetails(),

            self::outfits() . ", that buttons in the front to a low waist, 
            and is fitted to a " . VerbsGenerator::getComplexity() . " bodice,",

            self::outfits() . ", fit closely to the body with " . GeneralWardrobe::outfitDetails() . 
            " and it has " . GeneralWardrobe::richDetails(),

            "Burgundian style " . self::outfits() ." with " . GeneralWardrobe::outfitDetails() . 
            " and it has " . GeneralWardrobe::richDetails(),

            VerbsGenerator::getComplexity() . " " . self::textiles() . " " . self::outfits(),
    
            self::outfits() . " of " . VerbsGenerator::getComplexity() . " " . self::textiles(),
    
            self::textiles() . " " . self::outfits() .
                " similar to the clothing of the elite but made of cheaper 
                materials with less dye and ornamentation",
    
        ];
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }


    //-------------------------------------INTRO
    /**
     * Array of sentences to use in buildup
     * 
     * @return string intro
     */
    private function _intros()
    {
        $intros = [
            'who looks quite wealthy.',
            'who looks very comfortable.',
            'who seems to be blooming.',
            'that looks "in the money".',
            'who recently became flourishing.',
            'looking halcyon at best.',
            'who looks well-off.',
            'who seems to be on top of the heap.',
        ];
        $intro = array_rand(array_flip($intros), 1);
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


