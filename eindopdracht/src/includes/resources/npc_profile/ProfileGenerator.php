<?php

/** 
 * Characteristics and Face Detail Generator
 * eyes
 * nose
 * mouth
 * teeth
 * chin
 */
class ProfileGenerator
{
    /**
     * Constructor
     */
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

    /**
     * Getter
     * 
     * @return this object
     */
    public function getChin()
    {
        return $this->chin;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getEyes()
    {
        return $this->eyes;
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

    /**
     * Getter
     * 
     * @return this object
     */
    public function getNose()
    {
        return $this->nose;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getTeeth()
    {
        return $this->teeth;
    }
}

/*
$new_profile = new ProfileGenerator();
$new_profile->getEyes(); etc.
*/