<?php
/**
 * De index controller behandeld de requests voor de route "/".
 */

class NewPageController extends Controller
{
    public function index() 
    {
        $page = Database::raw('select * from pages where id = ' . $_REQUEST['id'])->asObject();
        $this->view('newpage.php', $page);
    }
}

// edit functie brengt ons naar bestaande pagina met bestaande inhoud
/*
public function edit() 
{
    $page = Database::raw('select * from pages where id = ' . $_REQUEST['id'])->asObject();

    $this->view('admin_page_edit.php', $page);
}
*/

