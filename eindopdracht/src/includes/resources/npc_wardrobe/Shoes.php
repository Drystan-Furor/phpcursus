<?php

/**
 * Shoes make the man
 */
class Shoes
{

    /**
     * Get me a pair of shoes
     */
    public function __construct()
    {
        $this->shoes = self::shoes();
    }


    /**
     * Array
     * 
     * @return string
     */
    private static function _materials()
    {
        $shoeMaterials = [
            'goat hide', 'cow hide', 'leather', 'felt',
        ];
        $shoeMaterial = array_rand(array_flip($shoeMaterials), 1);
        return $shoeMaterial;
    }

    /**
     * Array
     * 
     * @return string
     */
    private static function _types()
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

    /**
     * Array
     * 
     * @return string
     */
    private static function _wearing()
    {
        $feetCovers = [
            'Feet covered with',
            'Feet protected by',
            'Feet fitted with',
        ];
        $wearing = array_rand(array_flip($feetCovers), 1);
        return $wearing;
    }

    /**
     * A pair of shoes
     * 
     * @return shoes
     */
    public static function shoes()
    {
        $shoes = self::_wearing() . " " . self::_types() . " made of " .
            self::_materials() . ". ";
        return $shoes;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getShoes()
    {
        return $this->shoes;
    }
}
/*
$new_shoes = new Shoes();
$new_shoes = $new_shoes->getShoes();
*/
