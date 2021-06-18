<?php include 'templates/header.php'; ?>

<?php include 'templates/menu.php'; ?>

<?php
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    include "page/{$page}.php";
} else {
    include 'page/home.php';
}
?>

<?php include 'templates/footer.php'; ?>