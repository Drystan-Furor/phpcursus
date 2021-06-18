<?php

function sendEmail($to, $from) {

    return true;
}

function logout() {
    session_start(); 

    $_SESSION = array();
    
    session_destroy(); 
}


function login() {
    
    session_start();

    $adminUser = 'pietje';
    
    if(isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($adminUser === $username) {
            $_SESSION['username'] = $username;
        }
    }
}
