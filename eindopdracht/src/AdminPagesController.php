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
    }
}