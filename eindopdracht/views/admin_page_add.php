  <?php $title = 'Admin Page Add' ?>
  <?php require 'components/header.php'; ?>

  <body>
      <?php require 'components/admin_menu.php'; ?>
      <?php require 'components/logout.php'; ?>
      <?php require 'components/menu.php'; ?>

      <h1>Page Add View</h1>
      <?php
        $formaction = "/admin/page/add";
        $valueId = "";
        $valueTitle = "";
        $valueContent = "";
        $valueSlug = "";
        require 'components/actionform.php'; ?>

      <?php require 'components/footer.php'; ?>