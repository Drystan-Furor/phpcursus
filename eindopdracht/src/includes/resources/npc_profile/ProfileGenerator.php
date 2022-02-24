<?php

/** 
  Characteristics
 */
/*
eyes
nose
mouth
teeth
chin
*/
// Face Detail Generator

class ProfileGenerator
{
    var $profile;

    private function __construct()
    {
        $this->profile = self::Profile();
    }

    private function Profile()
    {
        $eyes = new Eyes();
        $this->eyes = $eyes->getEyes();
        
        $nose = new Nose();
        $this->nose = $nose->getNose();
        
        $mouth = new Mouth();
        $this->mouth = $mouth->getMouth();
        
        $teeth = new Teeth();
        $this->teeth = $teeth->getTeeth();
        
        $chin = new Chin();
        $this->chin = $chin->getChin();

        $profile = [
            $this->eyes,
            $this->nose,
            $this->mouth,
            $this->teeth,
            $this->chin,
        ];
        return $profile;
    }
}

/*
$new_profile = new ProfileGenerator();
$new_profile == array of properties, taken from each class
*/





