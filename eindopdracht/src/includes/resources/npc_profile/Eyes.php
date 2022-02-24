<?php

//------------------------------------------------------Eyes
class Eyes
{
    var $eyeshape;
    var $canSee;

    private function __construct()
    {
            $this->eyeshape = self::eyeshape();
            $this->eyeshape = self::canSee();
    }

    private function eyeshape() 
    {
        $eyeshapes = [
            "squinty eyes", "big eyes", "small eyes", "fairly large eyes", "tired eyes",
            "energetic eyes", "drowzy eyes", "round eyes", "almond shaped eyes",
            "wide set eyes", "close set eyes", "prominent eyes", "downturned eyes",
            "upturned eyes", "deep set eyes", "droopy eyes",
            "monolid eyes", "blind eyes",
        ];//array of eye shapes

        return $this->eyeshape = array_rand(array_flip($eyeshapes), 1);
    }

    private function canSee()
    {
        $hasEyes = rand(1, 100); //does it have eyes?
        if ($hasEyes == 1) { //1% chance to be blinded
            $this->eyeshape = 'empty eye sockets, eyes gauged out';
        } else if ($hasEyes >= 2 && $hasEyes <= 10) { //8% chance to be blind on one or both eyes
            $blindeye = [
                ", the left eye is blind", ", the right eye is blind",
                ", but both eyes are blind",
            ];
            $blindness = array_rand(array_flip($blindeye), 1);
            $this->eyeshape = $this->eyesshape . $blindness;
        }  
        return $this->eyeshape;
    }


    public function getEyes() 
    {
        return $this->eyeshape;
    }
}
/*
$eyes = new Eyes();
$eyes = $eyes->getEyes();
*/