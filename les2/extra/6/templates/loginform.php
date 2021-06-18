<?php if(isset($_SESSION['username'])): ?>
    Welkom <?php echo $_SESSION['username'] . '!'; ?>
    <br/>
    <a href="actions/logout.php">Uitloggen</a>
<?php else: ?>
    <form action="actions/login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" />
    <br/>
    <label for="password">Password</label>
    <input type="password" name="password" />
    <br/>
    <input type="submit" value="Submit" />
    </form>
<?php endif; ?>

