<php
<?php
/** 
 * Default Names
 */
class aaaDefault extends Name
{
    /**
     * Biography
     * 
     * @param $race    string
     * @param $new_npc string
     */
    private function __construct($dndrace, $new_npc)
    {
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname();
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'Aera', 'Aial', 'Aur', 'Deekek', 'Errk', 'Heehk', 'Ikki', 'Kleeck',
            'Oorr', 'Ouss', 'Quaf', 'Quierk', 'Salleek', 'Urreek', 'Zeed',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname()
    {
        $firstname = "";
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _nickname()
    {
        $nickname = $this->lastname;
        $this->nickname = $nickname;
        return $nickname;
    }

    /**
     * Array
     * 
     * @param $race    this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($dndrace, $new_npc)
    {
        $description = "From below, the " . $dndrace->getRace() .
            " look much like a large bird. Only 
        when " . $this->lastname . " descends to roost on a branch or walk 
        across the ground does " . $new_npc->getHisHer() .
            " humanoid appearance reveal itself.";

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Array of replacer
     * 
     * @return Nose replacer
     */
    public static function noseReplacer()
    {
        $nose = Nose::defaultNose();
        return $nose;
    }

    /**
     * Array of eyes.
     * 
     * @return eyes replacer
     */
    public static function eyesReplacer()
    {
        $eyes = Eyes::canSee();
        return $eyes;
    }


    /**
     * Array of replacer
     * 
     * @return mouth replacer
     */
    public static function mouthReplacer()
    {
        $mouth = Mouth::defaultMouths();
        return $mouth;
    }

    /**
     * Array of replacer
     * 
     * @return chin replacer
     */
    public static function chinReplacer()
    {
        $chin = Chin::defaultChin();
        return $chin;
    }

    /**
     * Array of replacer
     * 
     * @return teeth replacer
     */
    public static function teethReplacer()
    {
        $teeth = Teeth::defaultTeeth();
        return $teeth;
    }
    
}
