<?php $title = 'Login' ?>
<?php require 'components/header.php'; ?>

<body>

    <?php include 'components/menulist.php'; ?>

    <h1 class="center">Dit is de login pagina</h1>

    <div class="center">
        <form action="/login" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <br>

            <button class="submitbutton" type="submit" value="Submit">Submit</button>
        </form>
    </div>
    <?php if (isset($_SESSION['login_invalid'])) : ?>

        <p>De logingegevens zijn onjuist.</p>

    <?php endif; ?>
    <?php require 'components/footer.php'; ?>