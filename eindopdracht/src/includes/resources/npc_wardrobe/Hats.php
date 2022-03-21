<?php

/**
 * HATS
 */

class Hats
{
    private $hat;

    private function __construct()
    {
        $this->hat = self::hasHat();
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
        $hattextile = self::hatMaterials();
        $hatType = self::hatTypes();

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

    private function hasHat()
    {
        $this->hat = rand(1, 20);
        if ($this->hat > 15) {
            $this->hat = "";
        } else {
            $this->hat = self::craftHat();
        }
        return $this->hat;
    }

    /*
    get properties
    */
    public function getHat()
    {
        return $this->hat;
    }
}
