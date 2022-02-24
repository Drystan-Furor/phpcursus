<?php


class VerbsGenerator
{
    var $class;
    var $quality;
    var $maintenance;
    var $observe;
    var $indicator;
    var $length;

    //-----------------CLASSES
    public static function getClass()
    {
        $npcClasses = [
            'Barbarian', 'Bard', 'Cleric', 'Druid', 'Fighter', 'Monk',
            'Paladin', 'Ranger', 'Rogue', 'Sorcerer', 'Warlock', 'Wizard',
        ];
        $class = array_rand(array_flip($npcClasses));
        return $class;
    }

    //-----------------------------------------quality
    public static function getQuality()
    {
        $qualities = [
            'cheap', 'affordable', 'quality', 'expensive quality',
        ];
        $quality = array_rand(array_flip($qualities), 1);
        return $quality;
    }
    //$quality = Verbsgenerator::getQuality();

    public static function getComplexity()
    {
        $complexities = [
            'clean', 'plain', 'straightforward', 'classic', 'simple', 'beautiful',
        ];
        $complexity = array_rand(array_flip($complexities), 1);
        return $complexity;
    }
  

    //----------------------------------------maintenance
    public static function getMaintenance()
    {
        $maintenances = [
            'clean and slick', 'rusted', 'moldy', 'oxidated', 'clean',
            'damaged', 'shining', 'smooth', 'big', 'dented', 'flawed', 'dirty',
            'stained', 'filthy', 'greasy', 'begrimed', 'smudged', 'squalid', 'corroded',
            'disheveled', 'grimey', 'well maintained', 'bloodstained', 'unkempt',
        ];
        $maintenance = array_rand(array_flip($maintenances), 1);
        return $maintenance;
    }

    //---------------------------------------------observations
    public static function getObservation()
    {
        $observations = [
            'see', 'clearly notice', 'cautiously observe', 'simply spot', 'behold',
            'distinguish from a distance', 'discern',
            'glimpse', 'mark', 'catch a glimpse that', 'catch sight', 'make out',
            'take notice', 'survey',
        ];
        $observe = array_rand($observations, 1);
        return $observe;
    }

    //---------------indicators

    public static function getIndicator()
    {
        $indicators = [
            'indicates', 'connotes', 'denotes', 'hints', 'implies', 'suggests',
            'implies', 'symbolizes', 'specifies', 'reveals', 'proves', 'attests',
        ];
        $indicator = array_rand(array_flip($indicators), 1);
        return $indicator;
    }


    //----------------------------------------------lengths
    public static function getLength()
    {
        $lenghts = [
            'short', 'long', 'cape like', "full", 'wide',
        ];

        $length = array_rand(array_flip($lenghts), 1);
        return $length;
    }
}
//$class = VerbsGenerator::getClass();// make functions static to call them this way
/*
$observation = VerbsGenerator::getObservation();
$new_complexity = VerbsGenerator::getComplexity();
*/
//------------------------------------------------------beggar
    $clasping = [
        'clasps', 'clutches', 'clenches', 'holds', 'wears', 'is holding',
        'thightly squeezing', 'is caressing', 'fiddling with',
    ];
    $clasps = array_rand(array_flip($clasping), 1);