<?php $title = 'Blogpost' ?>
  <?php require 'components/header.php'; ?>
  <body>

    <?php include 'components/menu.php'; ?>
    <!--  $i moet gezet worden in controller, dan vangt deze pagina alles af als een Content of Niet Gepubliceerd, mss via navmenu keuze
  als nav menu alles in db kan tonen, dan alleen de href link mogelijk maken., $i kan pages ID zijn, klik in navmenu zet $i.-->
    <?php if($params[$i]->status === 'published'): ?>
    
    <h1><?php echo $params[$i]->title; ?></h1>

    <p><?php echo $params[$i]->content; ?></p>
    
    <?php else: ?>

        <h1>Deze pagina is nog niet gepubliceerd..</h1>

    <?php endif; ?>

    <img src="/images/logo.jpeg" alt="Avans+ logo" width="200" />

  </body>
</html>