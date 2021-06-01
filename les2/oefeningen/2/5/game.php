<?php

// Oefening 5.

session_start();

if(!isset($_SESSION['won'])) {
    $_SESSION['won'] = 0 ;
}

if(!isset($_SESSION['lost'])) {
    $_SESSION['lost'] = 0;
}

function throwDice() {
    return array(rand(1,6), rand(1,6));
}

function won() {
    $dice = throwDice();
    return ( ($dice[0] + $dice[1]) === 7);
}

$totalGames = $_SESSION['won'] + $_SESSION['lost'];
$wins = $_SESSION['won'];
$loses = $_SESSION['lost'];

?>

<?php include '../4/templates/header.php'; ?>

<?php include '../4/templates/menu.php'; ?>

<div class="container">

    <button type="button" class="btn btn-primary btn-lg btn-block" onClick="window.location.reload();">Gooi dobbelstenen!</button>

    <!-- toon alleen indien het spel is gestart -->
    <div class="<?php if(!$totalGames) { echo 'd-none'; } ?>">

        <div class="col-sm">

<?php
echo '<div class="row"><h1>';
if(won()) {
    $_SESSION['won']++;
    echo 'Gewonnen!' . PHP_EOL;
} else {
    $_SESSION['lost']++;
    echo 'Verloren :(' . PHP_EOL;
}
echo '</h1></div>';

echo '<div class="row">';
echo round(($wins / $totalGames) * 100); 
echo '% gewonnen' . PHP_EOL;
echo round(($loses / $totalGames) * 100);
echo '% verloren' . PHP_EOL;
echo '</div>';

echo "<div class=\"row\">{$totalGames} potjes gespeeld</div>" . PHP_EOL;
echo "<div class=\"row\">{$_SESSION['lost']} potjes verloren</div>" . PHP_EOL;
echo "<div class=\"row\">{$_SESSION['won']} potjes gewonnen</div>" . PHP_EOL;
?>
        
        </div>
    </div>
</div>

<?php include '../4/templates/footer.php'; ?>