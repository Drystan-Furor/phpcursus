<?php

/**
 * Uitwerkingen weekopdracht 1.
 * 
 * 1. Grove woorden uit willekeurige teksten vervangen voor willekeurige (random) aardige woorden.
 * 2. Zinnen automatisch corrigeert op hoofdletters.
 * 3. Tonen van de gecorrigeerde tekst.
 * 4. De tekst die getoond wordt mag niet langer zijn dan (x) aantal tekens en worden afgebroken met "..."
 * 5. Tonen van de grofheid van de tekst; met indicator "rood", "geel" of "groen".
 */

// 1.
$curseWords = array('bastard', 'shit', 'piss off', 'dick', 'stfu', 'fyfi', 'fuck');
$niceWords = array('sweet', 'darling', 'pumpkin', 'ducklin', 'happy', 'beautiful');

$originalText = "there are many fucking variations of passages of Lorem Ipsum available, but the shit majority have suffered alteration in some damned form, by injected humour, or randomised words which don't look even slightly believable. if you are going to use a passage of Lorem Ipsum, you need to be fucking sure there isn't anything embarrassing hidden in the middle of text.  all the Lorem Ipsum generators on the dick head Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. it uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";

foreach($curseWords as $curseWord) {
    $sanitizedText = str_ireplace(
        $curseWord, 
        $niceWords[rand(0, count($niceWords)-1)], 
        $originalText);
}

// 2.
$sentences = explode('.', $sanitizedText);

$text = '';
foreach($sentences as $sentence) {
    $correctedSentence = ucfirst(trim($sentence));
    if($correctedSentence) {
        $text .= $correctedSentence;
        $text .= '.';
        $text .= '<br/>';
    }
}

// 3.
echo '<p>';
echo $text;
echo '</p>';

// 4.
$maxLength = 100;
$textLength = strlen($text);
if($textLength > $maxLength) {
    $truncatedText = substr($text,0, $maxLength) . '...';
}

echo '<p>';
echo $truncatedText;
echo '</p>';

// 5.

$high = '<span style="background:red">red</span>';  // > 2
$medium = '<span style="background:yellow">yellow</span>'; // >=1 <2
$low = '<span style="background: green">green</span>';  // 0

$curseWordCounter = 0;

$words = explode(' ', strtolower($originalText));

foreach($curseWords as $curseWord) {
    foreach($words as $word) {
        if(str_contains($word, $curseWord)) {
            $curseWordCounter++;
        }
    }
}

$indicator = $low;

if($curseWordCounter >= 1 && $curseWordCounter < 2) {
    $indicator = $medium;
} elseif($curseWordCounter > 2) {
    $indicator = $high;
}

echo '<p> Number of swear words: ';
echo $curseWordCounter;
echo '</p>';

echo 'Indicator: ' . $indicator;