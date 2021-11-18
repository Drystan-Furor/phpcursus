<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Admin Pages</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <?php require 'components/admin_menu.php'; ?>

    <h1>Admin Pages</h1>
    <div>
        <?php echo $_SESSION['user']->username; ?> (<a href="/logout">uitloggen</a>)
    </div>

    <div style="margin-top:20px;">
      <a href="/admin/page/add">Add Page</a>
    </div>

    <div style="margin-top:20px;">
        <table border="1" width="100%">
        <tr>
            <td>ID</td>
            <td>TITLE</td>
            <td>CONTENT</td>
            <td>STATUS</td>
            <td>ACTION</td>
        </tr>
        <?php 
        foreach($params[0] as $page) {
            echo '<tr>';
            echo '<td>';
            echo $page['id'];
            echo '</td>';

            echo '<td>';
            echo $page['title'];
            echo '</td>';

            echo '<td>';
            echo $page['content'];
            echo '</td>';

            echo '<td>';
            echo $page['status'];
            echo '</td>';
           
            echo '<td>';
            echo '<ul><li>';
            if($page['status'] === 'draft') {
                echo '<a href="/admin/pages/?id=' . $page['id'] . '&action=publish">publish</a>';
            } else {
                echo '<a href="/admin/pages/?id=' . $page['id'] . '&action=unpublish">unpublish</a>';   
            }
            echo '</li>';
            echo '<li>';
            echo '<a href="/admin/page/edit/?id=' . $page['id'] . '">edit</a>';
            echo '</li>';
            echo '</ul>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    
        </table>
    </div>
  </body>
</html>