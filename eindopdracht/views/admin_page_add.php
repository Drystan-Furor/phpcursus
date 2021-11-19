  <?php $title = 'Admin Page Add' ?>
  <?php require 'components/header.php'; ?>
  <body>
    <?php require 'components/menu.php'; ?>
    <?php require 'components/admin_menu.php'; ?>

    <h1>Page Add View</h1>

<form action="/admin/page/add" method="post">
    <input type="hidden" name="id" value="">
  <div class="form-group row">
    <label for="title" class="col-4 col-form-label">Title</label> 
    <div class="col-8">
      <input id="title" name="title" placeholder="Vul de titel in" type="text" required="required" class="form-control" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="content" class="col-4 col-form-label">Content</label> 
    <div class="col-8">
      <textarea id="content" name="content" cols="40" rows="5" class="form-control" aria-describedby="contentHelpBlock"></textarea> 
      <span id="contentHelpBlock" class="form-text text-muted">Vul de pagina content in</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Slug</label> 
    <div class="col-8">
      <input id="text" name="slug" type="text" class="form-control" value="">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



  </body>
</html>