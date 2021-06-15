<?php

$hallo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$woorden = explode(' ', $hallo);

$geheim = array('desktop');

$woorden = str_replace($geheim, array('**********'), $woorden);

print_r($woorden);

echo strlen($hallo);

echo ucfirst($hallo);

$hallo = str_replace(',', '|', $hallo);

$hallo = str_replace('.', '?', $hallo);

$hallo = strtolower($hallo);

echo ucfirst($hallo);


