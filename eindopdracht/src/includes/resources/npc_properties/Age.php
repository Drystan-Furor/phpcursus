<?php

/**
 AGE Script
 */

//------------------------------------------------------age definer

class Age extends Race
{
    private $age;

    //** VAR applies to all, SWITCH specifies ON $this->dndrace */
    private function __construct()
    {
        $this->age = self::defineAge(); 
        //construct default
    }

    public function SetAge($age)
    {
        $this->age = $age;
        //Setter Function 
    }

    public function GetAge()
    {
        return $this->age;
        //Get the set age
    }

    //** Age Selector IF race != human aging */
    private function defineAge()
    {
        switch ($this->dndrace) {
            case $this->dndrace == "Elf":
                $age = rand(14, 750);
                break;
            case $this->dndrace == "Kenku" || $this->dndrace == "Lizardfolk" ||
                $this->dndrace == "Tabaxi" || $this->dndrace == "Goblin":
                $age = rand(14, 60);
                break;
            case $this->dndrace == "Dwarf" || $this->dndrace == "Firbolg":
                $age = rand(14, 350);
                break;
            case $this->dndrace == "Human" 
            || $this->dndrace == "Yuan Ti Pureblood" || $this->dndrace == "Goliath":
                $age = rand(14, 90);
                break;
            case $this->dndrace == "Tiefling" 
            || $this->dndrace == "Gith" || $this->dndrace == "Changeling":
                $age = rand(14, 100);
                break;
            case $this->dndrace == "Aarakocra" || $this->dndrace == "Warforged":
                $age = rand(3, 30);
                break;
            case $this->dndrace == "Tortle" || $this->dndrace == "Orc":
                $age = rand(12, 50);
                break;
            case $this->dndrace == "Aasimar":
                $age = rand(14, 160);
                break;
            case $this->dndrace == "Kobold" || $this->dndrace == "Genasi":
                $age = rand(14, 120);
                break;
            case $this->dndrace == "Halfling" || $this->dndrace == "Verdan":
                $age = rand(14, 250);
                break;
            case $this->dndrace == "Orc of Exandria" 
            || $this->dndrace == "Orc of Ebberon" 
            || $this->dndrace == "Half Orc":
                $age = rand(14, 75);
                break;
            case $this->dndrace == "Gnome" || $this->dndrace == "Loxodon":
                $age = rand(14, 425);
                break;
            case $this->dndrace == "Vedalkan":
                $age = rand(14, 500);
                break;
            default:
                $age = rand(14, 80); // age is always 14 - 80 not dependend on $race
                break;
                return $age;
        }
    }
}
