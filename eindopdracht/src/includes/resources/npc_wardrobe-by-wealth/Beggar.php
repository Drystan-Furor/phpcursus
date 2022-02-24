<?php

/**
 Rng how wealthy one is, generate wardrobe array's on Boolean
 */

class Beggar
{
    var $garb;
    var $intro;

    private function __construct()
    {
        $this->garb = Beggar::clothes();
        $this->intro = Beggar::beggarIntros();
    }

    private static function textiles()
    {
        $textiles = [
            'hemp', 'coarse wool', 'rags',
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'tunic', 'robe', 'garment',
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

    private static function clothes()
    {
        $outfit = Beggar::outfits();
        $textile = Beggar::textiles();
        $outfitDetail = Beggar::outfitDetails();

        $clothes = [
            $outfit . " made of " . $textile . ", " . $outfitDetail,
            "hooded " . $textile . " cloak, " . $outfitDetail,
            "functional " . $textile . " " . $outfit,
            "cotton bag " . $outfitDetail,
            "short skirted " . $textile . " tunic",
        ];
        $garb = array_rand(array_flip($clothes), 1);
        return $garb;
    }

    private function beggarIntros()
    {
        $wealthinessTypes = [
            'who seems to be homeless.', 'that looks like a beggar.',
            'who looks wretched.', 'that looks really squalid.',
            'a genuine panhandler.', 'a scrounger at best.',
            'who is regarded as a deadbeat.', 'who looks like a real hobo.',
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





 






















