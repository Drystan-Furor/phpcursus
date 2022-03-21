<?php

//------------------------shoes
class Shoes
{
    var $shoes;

    private function __construct()
    {
        $this->shoes = self::shoes();
    }


    private static function Materials() 
    {
        $shoeMaterials = [
            'goat hide', 'cow hide', 'leather', 'felt',
        ];
        $shoeMaterial = array_rand(array_flip($shoeMaterials), 1);
        return $shoeMaterial;
    }

    private static function Types() 
    {
        $shoeTypes = [
            'simple shoes',
            'heavy boots',
            'shoes',
            'boots',
            'long, pointy shoes',
            'sandals',
            "botes (boots) held on with straps",
            "clogs with wood soles",
            "rope soled shoes",
            "covered basts (made of tree bark)"
        ];
        $shoeType = array_rand(array_flip($shoeTypes), 1);
        return $shoeType;
    }

    private static function wearing() 
    {
        $feetCovers = [
            'Feet covered with',
            'Feet protected by',
            'Feet fitted with',
        ];
        $wearing = array_rand(array_flip($feetCovers), 1);
        return $wearing;
    }

    public static function shoes() 
    {
        $wearing = self::wearing(); // wearing
        $shoeType = self::Types(); // shoes
        $shoeMaterial = self::Materials(); // made of x

        $shoes = $wearing." ".$shoeType . " made of " . $shoeMaterial . ". ";
        return $shoes;
    }

    public function getShoes()
    {
        return $this->shoes;
    }
}
/*
$new_shoes = new Shoes();
$new_shoes = $new_shoes->getShoes();
*/









