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
