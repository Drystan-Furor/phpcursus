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
    private function __construct($heshe)
    {
        $this->outfit = self::clothes($heshe);
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
            'stained', 'functional', '',
        ];
        $weathered = array_rand(array_flip($weathered));
        return $weathered;
    }


    //-----------------------------outfit
    /**
     * Sentence builder
     * He / She 
     * 
     * @return outfit as a sentence
     */
    public function clothes($heshe)
    {
        $belt = new Belts();
        $belt = $belt->getBelt();
        // VerbsGenerator::holding()
        // Rings::craftRing()
        $shoes = new Shoes();
        $shoes = $shoes->getShoes();

        $this->outfit = strtoupper($heshe) . " wears a " . //He / She Wears a
            self::weathered() . " " . self::outfits() . //weathered outfit
            " made of " . self::textiles() . ", " . self::outfitDetails() . //made of 
            " and a " . self::weathered() . " " . $belt . ". " //and a weathered Belt;
            . SentenceGenerator::observing() . " " . Rings::craftRing() .
            $heshe . " " . VerbsGenerator::holding() . ". " .
            $shoes;
        return $this->outfit;
    }

    //-----------------------intro
    /**
     * Sentence builder
     * 
     * @return intro as a sentence
     */
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
