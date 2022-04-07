<?php

/**
 Rng how wealthy one is, generate wardrobe array's on Boolean
 */

class Beggar
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

    private static function textiles()
    {
        $textiles = [
            'hemp', 'coarse wool', 
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'short skirted tunic', 'robe', 'garment', 'cotton bag', 'rags',
            'hooded cloak'
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }

    private static function outfitDetails()
    {
        $detailoutfits = [
            "hanging loose and undefined,",
            "torn on the edges,",
            "full of holes and cuts,",
        ];
        $outfitDetail = array_rand(array_flip($detailoutfits));
        return $outfitDetail;
    }

    private static function weathered()
    {
        $weathered = [
            'partially torn', 'damaged and dirty', 
            'stained', 'functional','',
        ];
        $weathered = array_rand(array_flip($weathered));
        return $weathered;
    }

    public function clothes()
    {
        $this->outfit = " wears a " . self::weathered() ." " . self::outfits() . 
        " made of " . self::textiles() . ", " . self::outfitDetails() . 
        " and a " . self::weathered() ." ";//Belt;
        return $this->outfit;
    }

    //-----------------------intro
    public static function intros()
    {
        $wealthinessTypes = [
            'who seems to be homeless.', 'that looks like a beggar.',
            'who looks wretched.', 'that looks really squalid.',
            'a genuine panhandler.', 'a scrounger at best.',
            'who is regarded as a deadbeat.', 'who looks like a real hobo.',
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