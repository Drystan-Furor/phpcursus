<?php $title = 'Home' ?>
<?php require 'components/header.php'; ?>

<body>
    <?php include 'components/menulist.php'; ?>

    <?php if ($params[0]->status === 'published') : ?>

        <h1 class="centertext"><?php echo ucfirst($params[0]->title); ?></h1>

        <p class="centeredblog"><?php echo $params[0]->content; ?></p>

    <?php else : ?>

        <h1 class="centertext">Deze pagina is nog niet gepubliceerd..</h1>

    <?php endif; ?>



    <h1 class="centertext">Blogs:</h1>

    <?php foreach ($params[1] as $blog) : ?>

        <?php if ($blog['status'] === 'published') : ?>
            <h2 class="centertext"><?php echo $blog['title']; ?></h2>
            <p class="centeredblog"><?php echo $blog['content']; ?></p>

        <?php else : ?>

            <h2 class="centertext">Deze Blog is nog niet gepubliceerd..</h2>

        <?php endif; ?>
    <?php endforeach; ?>

    <img src="/images/logo.jpeg" alt="Avans+ logo" width="200" />
    <?php require 'components/footer.php'; ?>