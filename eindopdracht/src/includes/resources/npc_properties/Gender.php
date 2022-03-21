<?php
 /** 
  Gender Vars and Person Pronounce
  */
// Gender RNG
//------------------------------------------------------gender vars


class Gender
{
    private $gender;
    private $manWoman;
    private $heshe;
    private $hisher;

    private function __construct()
    {
        $this->gender = self::setGender();
    }

    private function setGender() 
    {
        $rnggender = rand(1, 2);
        if ($rnggender == 1) {
            $this->gender = 'male';
            $this->manWoman = 'man';
            $this->heshe = 'he';
            $this->hisher = 'his';

        } else {
            $this->gender = 'female';
            $this->manWoman = 'woman';
            $this->heshe = 'she';
            $this->hisher = 'her';
        }   
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getManWoman()
    {
        return $this->manWoman;
    }

    public function getHeShe()
    {
        return $this->heshe;
    }

    public function getHisHer()
    {
        return $this->hisher;
    }

}
/*
$new_gender = new Gender();
$gender = $new_gender->getGender();
$manWoman = $new_gender->getGender();
$heshe = $new_gender->getGender();
$hisher = $new_gender->getGender();

*/
