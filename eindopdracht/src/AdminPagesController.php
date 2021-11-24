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
        if (!isset($_SESSION['user'])) {
            header('location: /login');
        }

        $pages = Database::raw('SELECT * from pages')->asArray();

        $this->view('admin_pages.php', $pages);
    }



    public function edit()
    {
        $page = Database::raw('SELECT * from pages where id = ' . $_REQUEST['id'])->asObject();

        $this->view('admin_page_edit.php', $page);
    }



    public function show() 
    {
        $page = Database::raw('SELECT * FROM pages where id = ' . $_REQUEST['id'])->asObject();

        $this->view('newpage.php', $page);
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

        Database::raw("INSERT INTO pages (title, content, slug) VALUES ('$title', '$content', '$slug')");

        header('location: /admin/pages');
    }


    /*
    Middels gebruik van een aangepaste edit/store combinatie functie zou het mogelijk zijn geweest
    om "PAGES" te bestempelen als topics, en dan per topic-page een alinea toe te voegen.
    Om dit echter mogelijk te maken, zou de database uitgebreid moeten worden met een estra Table
    Deze Table zou een FOREIGN KEY moeten bevatten die verwijst naar de PRIMARY KEY van PAGES
    als PAGES dan TOPICS zijn, zou je dus PER topic-page een <form> invullen, waarvan je Title als een <h1>
    en content als een <p> zou kunnen plaatsen in een php echo na een query.

    Aangezien de readme vooraf ons alleen vertelt over USERS en PAGES, moesten we in dit raamwerk de opdracht maken.
    Ook is het bij nadere beschouwing van de Eindopdracht in RAW niet de bedoeling om de database uit te breiden.

    Echter, de Eindopdracht in RAI zou betekenen dat wij meerdere blogs per page hadden kunnen schrijven.
    Voor nu is het meer dan gevraagd en heb ik alle code die ik ervoor geschreven had verwijderd.
    Verwijderd uit
        AdminPagesController
        routes
        admin_page_add_blogpost [volledig verwijdert]
    */

    public function update()
    {
        $action = $_REQUEST['action'] ?? '';
        $id = $_REQUEST['id'] ?? 0;

        switch ($action) {
        case 'publish':
            Database::raw('UPDATE pages set status = "published" where id = ' . $id);
            break;
        case 'unpublish':
            Database::raw('UPDATE pages set status = "draft" where id = ' . $id);
            break;
        case 'delete':
            Database::raw('DELETE FROM pages where id = ' . $id);
            break;
        }

        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['slug'])) {

            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $slug = $_POST['slug'];

            $updateQuery = 'UPDATE pages set title = "%s", content = "%s", slug = "%s" where id = %d';

            Database::raw(
                sprintf($updateQuery, $title, $content, $slug, $id)
            );

            header('location: /admin/page/edit?id=' . $id);
        }
    }
}
