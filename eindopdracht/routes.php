<?php

/**
 * Dit bestand is verantwoordelijk voor het afhandelen
 * van routes en de juiste controller aan te roepen.
 * Voeg maar eens een nieuwe route toe aan de switch case (bijvoorbeeld een /contact) en kijk
 * wat er gebeurd.
 */

$requestUri = explode('?', $_SERVER['REQUEST_URI'], 2);
$requestedRoute = $requestUri[0];

switch($requestedRoute) 
{
    case '/':
        $indexController = new IndexController;
        $indexController->index();
        break;
    case '/login':
        $loginController = new LoginController;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loginController->login();
        }
        else {
            $loginController->index();  
        }
        break;
    case '/logout':
        $loginController = new LoginController;
        $loginController->logout();
        break;
    case '/admin/pages':
        $adminPagesController = new AdminPagesController;

        if(isset($_GET['action']) && isset($_GET['id'])) {
            $adminPagesController->update();
        }

        $adminPagesController->index();
        break;
    
    default:
        $notFoundController = new NotFoundController;
        $notFoundController->index();
        break;
}