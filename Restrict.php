<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: http://localhost/XAMPP-CRUD-app/Login.php');
        exit;
    } else {
        // Show users the page! 
    }
?>