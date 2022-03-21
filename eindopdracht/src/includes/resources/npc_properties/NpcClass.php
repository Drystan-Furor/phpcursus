<?php

class NpcClass
{
    private $npcClass;

    private function __construct()
    {
        $this->npcClass = self::getNpcClass();
    }
    //-----------------CLASSES
    public function generateClass()
    {
        $npcClasses = [
            'Barbarian', 'Bard', 'Cleric', 'Druid', 'Fighter', 'Monk',
            'Paladin', 'Ranger', 'Rogue', 'Sorcerer', 'Warlock', 'Wizard',
        ];
        $this->npcClass = array_rand(array_flip($npcClasses));
        return $this->npcClass;
    }

    public function getNpcClass()
    {
        return $this->npcClass;
    }
}
