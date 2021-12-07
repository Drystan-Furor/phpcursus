<?php
$menulist = Database::raw('select * from pages')->asArray();
$bloglist = Database::raw('select * from blogs')->asArray();
$i = 1;
$j = 1;
?>
<div class="navmenucontainer">
    <div class="navmenu">
        <div>Menu</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/login">Inloggen</a></li>
            <ul>Pages:
                <?php
                foreach ($menulist as $page) : ?>
                    <a href="<?php echo "/newpage/?id=" . $page['id'] ?>">
                        [<?php echo $i . "] " . $page['title'];
                            $i++; ?> / </a>
                <?php endforeach; ?>
            </ul>
            <ol>Blogs:
                <?php
                foreach ($bloglist as $blog) : ?>
                    <li><a href="<?php echo "/index/?id=" . $blog['id'] ?>">
                            [<?php echo $j . "] " . $blog['title'];
                                $j++; ?></a></li>
                <?php endforeach; ?>
            </ol>
        </ul>
    </div>
</div>