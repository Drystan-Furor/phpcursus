<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>

    <?php include 'components/menu.php'; ?>

    <?php if($params[0]->status === 'published'): ?>
    
    <h1><?php echo $params[0]->title; ?></h1>

    <p><?php echo $params[0]->content; ?></p>
    
    <?php else: ?>

        <h1>Deze pagina is nog niet gepubliceerd..</h1>

    <?php endif; ?>


    <img src="/images/logo.jpeg" alt="Avans+ logo" width="200" />

  </body>
</html>