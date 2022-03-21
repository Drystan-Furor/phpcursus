<?php
class Loaded
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
            "silk", "velvet",
            'brocade silk', 
            'damask silk',
            'brocade velvet', 
            'damask velvet',
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'costume', 'gown', "doublet", 'cote hardie',
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
            $complexity . " " . $textile . " " . $outfit . ", fit closely to the body,",
            $complexity . " " . $textile . " hooded cloak",
            "Burgundian style " . $complexity . " " . $textile . " " . $outfit,
            "clerical " . $complexity . " " . $textile . " robes",
            "elaborately printed " . $outfit . " in " . $complexity . " " . $textile . ",",
    
            $complexity . " " . $textile . " " . $outfit . ", 
            closely following the lines of the body from the 
                    shoulder to below the waist",
    
            $complexity . " " . $textile . " houppelande, a beautiful, 
            full length robe like garment,",
    
        ];
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }


    //-------------------------------------INTRO
    private function intros()
    {
        $wealthinessTypes = [
            'who is unmistakenly of noble herritage.',
            'who looks extremely wealthy.',
            'who looks to have money to burn.',
            'who seems to be lousy self.',
            'that looks opulent and roaring.',
            'who is self and flourishing.',
            'looking truly halcyon and lucky.',
            'who looks positivly thriving.',
            'looking aristocratic and dignified.',
            'who seems to be a member of a noble family.',
            'who makes a real aristocratic impression.',
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