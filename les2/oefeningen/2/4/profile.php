<?php session_start(); 

// Post data opslaan in de sessie:
if(isset($_POST['username'])) {
    foreach($_POST as $key => $value) {
        $_SESSION[$key] = $value;
    }
} 

if(!isset($_SESSION['username'])) {
    header('location: index.php');
    exit;
}

?>

<?php include 'templates/header.php'; ?>

<?php include 'templates/menu.php'; ?>

<div class="container">

    <h1>Profiel van <?php echo $_SESSION['username']; ?></h1>

<?php include '../5/stats.php'; ?>

<div class="container">

    <h2>Profiel wijzigen</h2>

    <form class="p-2" action="profile.php" method="post">
        <div class="form-group">
            <input type="text" name="username" value="<?php echo @$_SESSION['username']; ?>" placeholder="Gebruikersnaam invullen" class="form-control">
            <input type="password" name="password" value="" class="form-control">
            <input type="text" name="bio" value="<?php echo @$_SESSION['bio']; ?>" placeholder="Biografie" class="form-control">
            <input type="text" name="birthdate" value="<?php echo @$_SESSION['birthdate']; ?>" placeholder="Geboortedatum" class="form-control">
            <input type="text" name="email" value="<?php echo @$_SESSION['email']; ?>" placeholder="Email" class="form-control">
            <input type="text" name="phone" value="<?php echo @$_SESSION['phone']; ?>" placeholder="Telefoonnummer" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary form-control">Opslaan</button>
    </form>

</div>

</div>

<?php include 'templates/footer.php'; ?>