<?php

session_start(); 

?>
<?php 

if(isset($_SESSION['username'])) {
?>

    <a href="logout.php">Uitloggen</a>

<?php
}
?>

<h1>About</h1>
