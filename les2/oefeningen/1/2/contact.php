<?php include '../1/templates/header.php'; ?>

<h1>Oefening 2</h2>

<?php include '../1/templates/menu.php'; ?>

<form class="p-2" action="action.php" method="get">
    <div class="form-group">
        <label for="name">Naam</label>
        <input type="text" id="name" name="name" placeholder="Jouw naam" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Jouw email" class="form-control">
    </div>
    <div class="form-group">
        <label for="website">Website</label>
        <input type="text" id="website" name="website" placeholder="Jouw website url" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Bericht</label>
        <textarea id="message" name="message" placeholder="Iets schrijven" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary form-control">Versturen</button>
</form>

<?php include '../1/templates/footer.php'; ?>