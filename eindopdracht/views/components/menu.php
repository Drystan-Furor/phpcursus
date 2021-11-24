<?php 
$menulist = Database::raw('select * from pages')->asArray();
?>
    <div>
        <div>Menu</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/login">Inloggen</a></li>
            <ul>
            <?php
            foreach ($menulist as $page) : ?> 
            <li><a href="<?php echo "/newpage/?id=" . $page['id']?>"><?php echo $page['title'];?></a></li>
            <?php endforeach; ?>
            </ul>
        </ul>
    </div>