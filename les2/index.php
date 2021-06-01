<?php
include 'header.php';
?>
<body>
<?php include 'tabel.php'; ?>
<?php 

session_start(); 

$_SESSION['email'] = $_POST['email'];

?>
<?php

session_start();

echo $_SESSION['email']; 

?>