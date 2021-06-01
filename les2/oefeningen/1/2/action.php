<?php

// Oefening 2: Toon waarden uit het formulier.

foreach($_REQUEST as $key=>$value) {
    echo $key . '=' . $value;
    echo '<br/>'; 
}

// Oefening 3: Verstuur een email.

$adminEmail = 'jouw email adres';
$subject = "Mail oefening";

$message = 'Van: ' . $_POST['name'] . '<' . $_POST['email'] . '>' . PHP_EOL;
$message .= 'Website: ' . $_POST['website'] . PHP_EOL;
$message .= 'Bericht: ' . wordwrap($_POST['message'], 70) . PHP_EOL;

if(mail($adminEmail, $subject, $message)) {
    echo "Mail verzonden";
} else {
    echo "Kan mail niet verzenden";
}