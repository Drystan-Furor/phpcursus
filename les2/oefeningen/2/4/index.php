<?php session_start(); ?>

<?php include 'templates/header.php'; ?>

<?php include 'templates/menu.php'; ?>

<?php if(isset($_SESSION['username'])): ?>

<h2>Welkom terug <?php echo $_SESSION['username']; ?></h2>

<?php else: ?>

<h1>Inloggen</h1>

<form class="p-2" action="login.php" method="post">
    <div class="form-group">
        <input type="text" name="username" value="" placeholder="Gebruikersnaam invullen" class="form-control">
        <input type="password" name="password" value="" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary form-control">Inloggen</button>
</form>

<?php endif; ?>

<?php include 'templates/footer.php'; ?>