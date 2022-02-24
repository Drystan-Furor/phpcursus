<?php
 /** 
  Gender Vars and Person Pronounce
  */
// Gender RNG
//------------------------------------------------------gender vars


class Gender
{
    var $gender;

    private function __construct()
    {
        $this->gender = Gender::setGender();
    }

    public static function setGender() 
    {
        $rnggender = rand(1, 2);
        if ($rnggender == 1) {
            $gender = 'male';
            $thisGender = 'man';
            $heshe = 'he';
            $hisher = 'his';

        } else {
            $gender = 'female';
            $thisGender = 'woman';
            $heshe = 'she';
            $hisher = 'her';
        }

        $gender = [
            $gender,
            $thisGender,
            $heshe,
            $hisher,
        ];

        return $gender;       
    }

    public function getGender()
    {
        return $this->gender;
    }
}
/*
$new_gender = new Gender();
$new_gender = $this->gender->getGender();
*/
/*new_gender is array   $gender[$gender]
                        $gender[$thisGender]
                        $gender[$heshe]
                        $gender[$hisher]
*/
                        // generator gets new gender, and then Senetence Generator can use this created array, so we have to pass the object