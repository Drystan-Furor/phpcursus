<?php

if(sendEmail($_POST['email'])) {
    echo 'Uw email is verzonden aan ' . $_POST['email'];
}

function sendEmail($email = '') {
    return true;
}

/**
 * Valideer email op correctheid en geef true of false terug.
 */
function validateEmail($email) {

    // controleer op @ teken

    // controleer op lengte

    // controleer op TLD en het mag alleen .com zijn

    // geef als waarde true terug
}