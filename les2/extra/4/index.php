<?php

function throwDice() {
    return array(rand(1,6), rand(1,6));
}

function won($dice) {
    if($dice[0] + $dice[1] === 7) {
        return true;
    }
    return false;
}

function addWin() {
    @$_SESSION['win']++;
}

function addLost() {
    @$_SESSION['lost']++;
}


session_start();

$dice = throwDice();

if(won($dice)) {
    addWin();
} else {
    addLost();
}

?>

<form method="post">
<input type="submit" value="Play">
</form>

<p>
Play a game of dice.
</p>

<?php 
if(isset($_SESSION['win']) || isset($_SESSION['lost'])):
?>

<h1>
    <?php
    echo $_SESSION['win'];
    ?> wins /
    <?php
    echo $_SESSION['lost'];
    ?> losses
</h1>

<?php
endif;
?>