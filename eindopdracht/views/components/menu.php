    <div>
        <div>Menu</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/login">Inloggen</a></li>
            <?php //params toont alles wat uit db komt [title == slug] maar alleen op Admin Pages
            foreach ($params[0] as $page) : ?> 
            <li><?php echo $page['title'];?> </li>
            <?php endforeach; ?>
 
        </ul>
    </div>