<?php
/**
 * De index controller behandeld de requests voor de route "/".
 */
class IndexController extends Controller
{
    public function index() 
    {
        $page = Database::raw('select * from pages where slug = "home"')->asObject();
        $this->view('index.php', $page);
    }
}