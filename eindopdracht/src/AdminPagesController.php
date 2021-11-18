<?php
/**
 * De pages controller behandeld de requests voor de route "/admin/pages".
 */
class AdminPagesController extends Controller
{
    public function index() 
    {
        // login check, redirect terug naar login
        // wanneer de gebruiker niet is ingelogd.
        if(!isset($_SESSION['user'])) {
            header('location: /login');
        }
        
        $pages = Database::raw('select * from pages')->asArray();

        $this->view('admin_pages.php', $pages);
    }

    public function edit() 
    {
        $page = Database::raw('select * from pages where id = ' . $_REQUEST['id'])->asObject();

        $this->view('admin_page_edit.php', $page);
    }

    public function create() 
    {
        $this->view('admin_page_add.php');
    }

    public function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $slug = $_POST['slug'];

        Database::raw("INSERT INTO pages ('title', 'content', 'slug') VALUES ('$title', '$content', '$slug')");

        header('location: /admin/pages');
    }

    public function update()
    {
        $action = $_REQUEST['action'] ?? '';
        $id = $_REQUEST['id'] ?? 0;

        switch($action) {
            case 'publish':
                Database::raw('update pages set status = "published" where id = ' . $id);
                break;
            case 'unpublish':
                Database::raw('update pages set status = "draft" where id = ' . $id);
                break;
        } 
        
        if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['slug'])) {
            
            $id = $_POST['id'];
            $title = $_POST['title'];

            Database::raw('update pages set title = "'. $title .'" where id = ' . $id);

            header('location: /admin/page/edit?id=' . $id);
        }
    }
}