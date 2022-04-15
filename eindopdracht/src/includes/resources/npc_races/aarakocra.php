<?php
/** 
 * Aarakocra Names
 * An aarakocra of either gender may have one of these short names: 
 */
class aarakocra extends Name
{
    /**
     * Biography
     * 
     * @param $race    string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname();
        $this->nickname = $this->lastname;
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
        $description = "From below, the " . $dndrace .
            " look much like a large bird. Only 
        when " . $this->lastname . " descends to roost on a branch or walk 
        across the ground does " . $new_npc->getHisHer() .
            " humanoid appearance reveal itself.";

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Birds have beaks, not nose
     * 
     * @return Nose replacer
     */
    public static function noseReplacer()
    {
        $nose = rand(1, 100);
        switch ($nose) {
            case $nose >= 1 && $nose <= 24:
                $nose = 'a very generalist, prominent big beak';
                break;
            case $nose >= 25 && $nose <= 38:
                $nose = 'a scything upturned beak, small in width but quite long';
                break;
            case $nose >= 39 && $nose <= 47:
                $nose = 'an eagles beak, quite raptorial. With a strong sloping curve that
             prominently protrudes from the face';
                break;
            case $nose >= 48 && $nose <= 56:
                $outlines = [
                    "insect catching", "grain eating", "Coniferous seed eating",
                ];
                $outline = array_rand(array_flip($outlines), 1);
                $nose = 'a snub beak that is common with ' . $outline .
                    ' birds';
                break;
            case $nose >= 57 && $nose <= 64:
                $nose = 'a very long and sharp beak, thin and pointy, small in height but quite flat, 
            common with aerial fishing birds';
                break;
            case $nose >= 65 && $nose <= 68:
                $nose = 'a "Hawk" beak that has similarities with the curved 
            beaks of eagles and other predatory birds. It has a dramatic arched 
            shape';
                break;
            case $nose >= 69 && $nose <= 76:
                $nose = 'a perfectly straight beak. 
            It gives this birdfolk an aggresive profile since 
            it is usually seen on scavenging birds';
                break;
            case $nose >= 77 && $nose <= 84:
                $nose = 'a dip netting beak, rather big, with a very prominent 
            bottom mandible, like pelicans normally have';
                break;
            case $nose >= 85 && $nose <= 91:
                $outlines = [
                    "filter feeding", "pursuit fishing", "chiseling",
                ];
                $outline = array_rand(array_flip($outlines), 1);
                $nose = 'a thin and flat shaped beak with a short tip, 
            typical for ' . $outline;
                break;
            case $nose >= 92 && $nose <= 100:
                $nose = "a bulbous beak, it has a a swollen, disproportionate nasal tip,
            almost like it's too big. Imagine something like a fruit eating toucan";
                break;
        }
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
     * Array of beaks
     * 
     * @return mouth replacer
     */
    public static function mouthReplacer()
    {
        $mouthshapes = [
            "sharp tomia", "rounded tomia", "bow shaped tomia", "heavy lower tomia",
            "ridged tomia", "heavy upper tomia", "sawtooth serated tomia", "thin tomia",
            "downward turned tomia", "perfectly proportioned tomia",
        ];
        $mouth = array_rand(array_flip($mouthshapes), 1);
        return $mouth;
    }

    /**
     * Array of beaks
     * 
     * @return chin replacer
     */
    public static function chinReplacer()
    {
        $chincurves = [
            'pointy', 'round', 'square',
        ];
        $chincurve = array_rand(array_flip($chincurves), 1);

        $chinshapes = [
            'a rather ', 'quite the', 'a very defined', 'a puffed',
            'a very protruding', 'a bulbous', 'a very small', 'a bit of a',
        ];
        $chinshape = array_rand(array_flip($chinshapes), 1);

        $chin = $chinshape . " " . $chincurve . " culmen";

        return $chin;
    }

    /**
     * Array of beaks
     * 
     * @return teeth replacer
     */
    public static function teethReplacer()
    {
        $teethTypes = [
            'shiny white', 'yellow', 'quite large',
            'rather small', 'yellow and grey', 'crooked',
            'lead', 'tin', 'copper', 'steel', 'cast-iron',
            'iron', 'metal',
        ];
        $teethType = array_rand(array_flip($teethTypes), 1);

        $dentalwork = [
            "has a " . MaterialGenerator::getMetalType() . " beak",
            "has a hard horny tissue at the tip of the beak",
            "has a " . $teethType . " shield-shaped structure on the tip of it's beak",
            "has a " . $teethType . " shield-shaped structure on it's beak tip, 
            which spans the entire width of the beak",
            "has a " . $teethType . " shield-shaped structure on it's beak, 
            which is bent at the tip to form a hook",
            "has a " . $teethType . " shield-shaped structure on it's beak tip, 
            which spans the entire width of the beak and bent at the tip to form a hook",
            "has a fake beak, like a prosthetic made of " . VerbsGenerator::quality() . " "
                . MaterialGenerator::getMetalType(),
        ];
        $teeth = array_rand(array_flip($dentalwork), 1);

        return $teeth;
    }
    
}
