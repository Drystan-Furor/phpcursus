<?php

class SentenceGenerator
{
    public static function observing()
    {
        $intros = [
            "At a glance you " . VerbsGenerator::getObservation() . " the ",
            "At first sight the ",
            "At a gander you " . VerbsGenerator::getObservation() . " the ",
            "In a flash you " . VerbsGenerator::getObservation() . " the ",
            "In a fleeting look you " . VerbsGenerator::getObservation() . " the ",
            "While checking, you " . VerbsGenerator::getObservation() . " the ",
        ];

        $intro = array_rand(array_flip($intros));
        return $intro;
    }
}
//$new_intro = SentenceGenerator::observing();
