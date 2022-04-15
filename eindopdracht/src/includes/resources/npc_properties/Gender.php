<?php
 /** 
  * Gender RNG
  * Gender Vars and Person Pronounce
  */
class Gender
{
    /**
     * Construct a man or a woman
     */
    public function __construct()
    {
        $this->Class_gender = self::_setGender();
    }


    //------------------------------------------------------gender vars
    /**
     * Based on random of 1 or 2
     * 50/50 to be either gender
     * Setter
     * 
     * @return pronounces
     */
    private function _setGender() 
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

    /**
     * Getter
     * 
     * @return this object
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getManWoman()
    {
        return $this->manWoman;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getHeShe()
    {
        return $this->heshe;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getHisHer()
    {
        return $this->hisher;
    }

}

/*
$new_gender = new Gender();
$gender = $new_gender->getGender();
$manWoman = $new_gender->getManWoman();
$heshe = $new_gender->getHeShe();
$hisher = $new_gender->getHisHer();
*/
