<div class="container">

    <h2>Spelletjes statistieken</h2>

    <div class="col-sm">
    <?php

    $totalGames = $_SESSION['won'] + $_SESSION['lost'];
    $wins = $_SESSION['won'];
    $loses = $_SESSION['lost'];

    echo '<div class="row">';
    echo round(($wins / $totalGames) * 100); 
    echo '% gewonnen' . PHP_EOL;
    echo round(($loses / $totalGames) * 100);
    echo '% verloren' . PHP_EOL;
    echo '</div>';

    echo "<div class=\"row\">{$totalGames} potjes gespeeld</div>" . PHP_EOL;
    echo "<div class=\"row\">{$_SESSION['lost']} potjes verloren</div>" . PHP_EOL;
    echo "<div class=\"row\">{$_SESSION['won']} potjes gewonnen</div>" . PHP_EOL;

    ?>
    </div>
</div>