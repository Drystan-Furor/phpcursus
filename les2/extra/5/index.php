<?php

/**
 * Count website visits.
 * 
 * Call this function before output is sent to the browser.
 * Because the session_start will set a cookie in the response header. And this cannot 
 * be done after headers have been sent.
 *
 * @return int number of visits
 */
function countVisit() {
    session_start();
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }
    $visits = ++$_SESSION['count'];
    return $_SESSION['count'];
}

function test_input($input) {
    return str_contains($input, '@');
}

function verzendEmail($to_email, $from_email) {
    // doe email verzenden (alsof)
    return true;
}

?>
<!DOCTYPE html>
<html>

<body>

<?php
if (empty($_POST["email"])) {
    $emailErr = "voer uw email in";

    echo $emailErr;
} else {
    $email = $_POST["email"];
    if(test_input($email)) {
        if(verzendEmail('mijnemail@email.email', $email)) {
            echo '<h1>Email verzenden gelukt!</h1>';
        } else {
            echo 'Verzenden mislukt';
        }
    } else {
        echo 'Ongeldige invoer';
    }
    
}
?>   

<form action="index.php" method="post">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email">
    </br>
    <input type="submit" value="Submit">
</form>

</body>
</html>