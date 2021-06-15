<?php

$username = 'student';
$password = 'test';

session_start(); 

if(isset($_POST['username'])){
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $username;
    }
}
?>

<?php if(isset($_SESSION['username']) && $_SESSION['username'] == $username) {
    echo 'Je bent ingelogd. Welkom ' . $username;
}
else {
?>
    <form method="POST">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="Submit">
    </form>
<?php   
}
?>