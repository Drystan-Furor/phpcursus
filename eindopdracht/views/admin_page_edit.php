  <?php $title = 'Admin Page Edit' ?>
  <?php require 'components/header.php'; ?>

  <body>
      <?php require 'components/admin_menu.php'; ?>
      <?php require 'components/menu.php'; ?>
      <?php require 'components/logout.php'; ?>

      <h1>Page Edit View</h1>
      <?php
        $formaction = "/admin/page/edit";
        $valueId = $params[0]->id;
        $valueTitle = $params[0]->title;
        $valueContent = $params[0]->content;
        $valueSlug = $params[0]->slug;
        require 'components/actionform.php'; ?>

        <?php require 'components/footer.php'; ?>