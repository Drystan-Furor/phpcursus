<?php
/**
 * Mouth generator 
 */ 

class Mouth
{

    /**
     * Constuct = select random value string
     * 
     * @param $dndrace this race
     */
    private function __construct($dndrace)
    {
        $this->mouth = self::_mouthShape($dndrace);
    }

    /**
     * Array of default values for Mouth
     * 
     * @return default single string of mouths
     */
    public static function defaultMouths()
    {
        $mouthshape = [
            "full lips", "round lips", "bow shaped lips", "heavy lower lips",
            "heart shaped lips", "heavy upper lips", "wide lips", "thin lips",
            "downward turned lips", "perfectly proportioned lips",
            ];
            $mouth = array_rand(array_flip($mouthshape), 1);
            return $mouth;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace this race
     * 
     * @return mouth
     */
    private function _mouthShape($dndrace)
    {
        if (Race::isRaceInRaceArray($dndrace) == true) {
            $this->mouth = strtolower($dndrace)::mouthReplacer();
        } else {
            $this->mouth = self::defaultMouths();
        }
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getMouth()
    {
        return $this->mouth;
    }
}

/*
$mouth = new Mouth();
$mouth = $mouth->getMouth();
*/