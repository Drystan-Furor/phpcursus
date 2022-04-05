<?php

//----------------------------mouth Selector 

class Mouth
{
    var $mouth;

    private function __construct()
    {
        $this->mouth = self::mouthShape();
    }

    private function mouthShape()
    {
        $mouthshape = [
            "full lips", "round lips", "bow shaped lips", "heavy lower lips",
            "heart shaped lips", "heavy upper lips", "wide lips", "thin lips",
            "downward turned lips", "perfectly proportioned lips",
        ];
        $this->mouth = array_rand(array_flip($mouthshape), 1);
    }

    public function getMouth()
    {
        return $this->mouth;
    }
}
/*
$mouth = new Mouth();
$mouth = $mouth->getMouth();
*/