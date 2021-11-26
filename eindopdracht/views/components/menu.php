<?php
$menulist = Database::raw('select * from pages')->asArray();
$i = 1;
?>
<div class="navmenucontainer">
    <div class="navmenu">
        <div>Menu</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/login">Inloggen</a></li>
            <ul> Blogposts: 
                <?php
                foreach ($menulist as $page) : ?>
                    <a href="<?php echo "/newpage/?id=" . $page['id'] ?>">
                    [<?php echo $i . "] " . $page['title']; $i++;?> / </a>
                <?php endforeach; ?>
            </ul>
        </ul>
    </div>
</div>