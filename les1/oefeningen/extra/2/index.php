<form method="post">
    <input type="text" name="email">
    <input type="text" name="body">
    <input type="submit" value="Verzenden">
</form>

<?php

function verstuurMail($email, $body) {
  
}

if(isset($_POST['email']) && isset($_POST['body'])) {
    verstuurMail($_POST['email'], $_POST['body']);
}

/**
 *   $body = $_POST['body'];
    $body .= $_POST['email'];
    mail('mijnemail@gmail.com', $subject, $body);
 */


