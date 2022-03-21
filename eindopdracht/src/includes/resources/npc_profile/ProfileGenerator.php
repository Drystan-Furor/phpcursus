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
// getters and setters are in each seperate class, getters are public

class ProfileGenerator
{
    private $eyes;
    private $nose;
    private $mouth;
    private $teeth;
    private $chin;

    private function __construct()
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
    }

    public function getChin()
    {
        return $this->chin;
    }

    public function getEyes() 
    {
        return $this->eyes;
    }

    public function getMouth()
    {
        return $this->mouth;
    }

    public function getNose()
    {
        return $this->nose;
    }

    public function getTeeth()
    {
        return $this->teeth;
    }
}

/*
$new_profile = new ProfileGenerator();
$new_profile->getEyes(); etc.
*/