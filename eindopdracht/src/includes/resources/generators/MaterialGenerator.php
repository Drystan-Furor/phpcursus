<?php

/**  
 * Materials Library
 */
class MaterialGenerator
{

    public static function getMetalType()
    {
        //------------------------------------------------------metals
        $metals = [
            'silver', 'gold', 'bronze',
            'steel', 'copper', 'platinum',
            'iron',
        ];
        $metal = array_rand(array_flip($metals, 1));
        return $metal;
    }

    public static function getPlateType()
    {
        //--------------------------------------------platemetals
        $platemetals = [
            'lead', 'tin', 'copper', 'steel', 'cast-iron',
            'iron', 'metal', 'darkwood', 'stone', 'rock',
        ];
        $platemetal = array_rand(array_flip($platemetals, 1));
        return $platemetal;
    }

    public static function getEnamelType()
    {
        $enameling = [ //--------------------------enameled with
            'bronze', 'silver', 'platinum', 'gold', 'chrome', 'glass',
        ];
        $enamel = array_rand(array_flip($enameling, 1));
        return $enamel;
    }

    public static function getWoodType()
    {
        //-------------------------------------------wood kinds
        $carpenterswood = [ // organic
            'Oak', 'Pine', 'Beech', 'Birch', 'Cherry', 'Elm', 'Hawthorn', 'Juniper',
            'Mahogany', 'Maple', 'Poplar', 'Willow', 'Spruce', 'Chestnut', 'Fir',
            'Cypress', 'Redcedar', 'Hemlock',
        ];
        $wood = array_rand(array_flip($carpenterswood, 1));
        return $wood;
    }

    public static function getGemstoneType()
    {
        $gemstones = [
            'stone of Onyx',
            'gem of Emerald',
            'black Sapphire',
            'Sapphire',
            'Diamond',
            'Ruby',
            'garnet of Opal',
            'Pearl',
            'black Pearl',
            'series of pearls',
            'blue Spinel',
            'Turqoise',
            'watery gold piece of Amber',
            'crimson piece of Coral',
            'Tigers-eye',
            'Pyrite',
            'Star rose Quartz',
            'blue Quartz',
            'gray-black Hermatite',
            'dark green Malachite',
            'Sardonyx',
            'Zircon',
            'Jasper',
            'rock of Amethyst',
            'transparent fiery orange Jacinth',
        ];
        $gemstone = array_rand(array_flip(array_keys($gemstones)));
        return $gemstone;
    }
}
/*
$new_metal = MaterialGenerator::getMetalType();
$new_plate = MaterialGenerator::getPlateType();
$new_enamel = MaterialGenerator::getEnamelType();
$new_wood = MaterialGenerator::getWoodType();
$new_gemstone = MaterialGenerator::getGemstoneType();
*/