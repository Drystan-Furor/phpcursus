
<form method="POST">
 <label for="email">Email</label>
 <input type="text" name="email">
 <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    echo 'Uw emailadres is: ' . $email;
}
?>

