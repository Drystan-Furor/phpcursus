<?php


//------------------------------------------------------chin

//if beard
// am i constructing a chin when class is called?
class Chin
{
    var $chin;

    private function __construct()
    {
        $this->chin = self::chinShaper();
    }

    private function chinShaper()
    {
        
        $chinshapes = [
            'a rather ', 'quite the', 'a very defined', 'a puffed',
            'a very protruding', 'a bulbous', 'a very small', 'a bit of a',
        ];
    
        $chincurves = [
            'pointy', 'round', 'square',
        ];

        $chinshape = array_rand(array_flip($chinshapes), 1);
        $chincurve = array_rand(array_flip($chincurves), 1);
        $this->chin = $chinshape . " " . $chincurve . " chin";
    }


    public function getChin()
    {
        return $this->chin;
    }
}

/*
$chin = new Chin();
$chin = $chin->getChin();
*/