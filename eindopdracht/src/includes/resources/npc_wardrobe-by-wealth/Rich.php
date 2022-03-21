
<?php
class Rich
{
    var $outfit;
    var $intro;

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
            'tunic', 'robe', 'costume', 'gown', "doublet", 'cote hardie',
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
            'who looks quite wealthy.',
            'who looks very comfortable.',
            'who seems to be blooming.',
            'that looks "in the money".',
            'who recently became flourishing.',
            'looking halcyon at best.',
            'who looks well-off.',
            'who seems to be on top of the heap.',
        ];
        $intro = array_rand(array_flip($wealthinessTypes), 1);
        return $intro;
    }



    public function getOutfit()
    {
        return $this->outfit;
    }

    public function getIntro()
    {
        return $this->intro;
    }
}


