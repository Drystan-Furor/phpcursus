<?php $title = 'Login' ?>
  <?php require 'components/header.php'; ?>
  <body>
    <?php include 'components/menu.php'; ?>
    
    <h1>Dit is de login pagina</h1>
    
    <form action="/login" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">

        <input type="submit" value="Submit">
    </form>

    <?php if(isset($_SESSION['login_invalid'])): ?>

        <p>De logingegevens zijn onjuist.</p>

    <?php endif; ?>
  
    </body>
</html>