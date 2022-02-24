<?php

/**
 * HATS
 */

class Hats
{
    var $hat;

    private function __construct()
    {
        $this->hat = Hats::setHat();
    }


    private static function hatMaterials()
    {
        $hattextiles = [
            "leather", "felt", "cotton", "wool", "straw", "linen", "knitted", "fur",
        ];
        $hattextile = array_rand(array_flip($hattextiles), 1);
        return $hattextile;
    }

    private static function hatTypes()
    {
        $hatTypes = [
            'cap', 'hat', 'beanie', 'hood', 'fedora', 'bowler', 'sombrero', 'beret',
            'skullcap', "tam o'shanter", 'fez', 'oesjanka', 'hood',
        ];
        $hatType = array_rand(array_flip($hatTypes), 1);
        return $hatType;
    }

    private static function craftHat()
    {
        $hattextile = Hats::hatMaterials();
        $hatType = Hats::hatTypes();

        $hats = [ //  wears
            "a wimple, a piece of cloth worn over the head and around the face and neck",
            "a $hattextile sugar loaf hat: a tallish, conical hat that resembles an 
            inverted flower pot",
            "a $hattextile flat mortar board type hat, people associate 
            with graduation,",
            "a chaperon, a $hattextile hood that is sewn onto a cape",
            "a $hattextile hood grown with extra fabric and slightly 
                longer than necessary",
            "a tall $hattextile conical hat worn tilted at the back of the head",
            "a " . $hattextile . " " . $hatType,
        ];
        $hat = array_rand(array_flip($hats), 1);
        return $hat;
    }

    private static function setHat()
    {
        $hat = rand(1, 20);
        if ($hat > 15) {
            $hat = "";
        } else {
            $hat = Hats::craftHat();
        }
        return $hat;
    }
}
