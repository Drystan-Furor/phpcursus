<?php

session_start();

@$_SESSION['bezoeken']++;

$bezoeken = $_SESSION['bezoeken'];

echo "Je hebt deze pagina {$bezoeken} bezocht!";

