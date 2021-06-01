<?php 

session_start();

$bezoeken = $_SESSION['bezoeken'];

echo "Je hebt deze pagina {$bezoeken} bezocht!";

?>

<br/>

<a href="logout.php" title="logout">Uitloggen</a>