<?php

/**
 how is the NPC build? DEFAULTS
 */


class BodiesGenerator
{
    var $bodytype;
    var $bodyshape;
    var $bodysize;

    private function __construct()
    {
        $this->bodytype = self::bodyType();
        $this->bodyshape = self::bodyShape();
        $this->bodysize = self::bodySize();
    }

    public static function bodyType()
    {
        //-----------------------------------------------------bodytypes
        $bodytypes = [
            "long and lean", "fat", "bulky", "muscular", "slender",
            "quite overweight", "with a delicate frame",
            "similar to a marathon runner", "stocky", "muscular, but also a bit fat",
            "obese", "athletic", "well defined muscled", "positivly ripped",
            "as broad as the side of a barn",
        ];
        $bodytype = array_rand(array_flip($bodytypes), 1);
        return $bodytype;
    }

    public static function bodyShape()
    {
        //------------------------------------------------------bodyshape
        $bodyshapes = [ //with 
            "narrow shoulders and a narrow bust",
            "slim arms and a fairly defined waist",
            "hips larger than the bust", "a shelf-like appearance",
            "hips and bust that are nearly equal in size", "a well-defined waist",
            "large shoulders and a large bust",
            "a little more weight in the upper legs",
            "shoulder and hip measurements that are about the same",
        ];
        $bodyshape = array_rand(array_flip($bodyshapes), 1);
        return $bodyshape;
    }

    public static function bodySize()
    {

        //------------------------------------------------------bodysize COMMON
        $bodysizes = [
            "small", "quite small", "very small", "really small",
            "slightly smaller", "rather small", "reasonably small",
            "tiny",

            "medium sized", "middle sized", "sort of typical sized", "common sized",
            "characteristically sized", "naturally common sized", "typical",
            "more or less standard sized", "moderately sized",

            "large", "quite large", "very large", "really large",
            "slightly larger", "reasonably large", "tall",
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }


    public function getBodyType()
    {
        return $this->bodyType;
    }

    public function getBodyShape()
    {
        return $this->bodyShape;
    }

    public function getBodySize()
    {
        return $this->bodysize;
    }
}
