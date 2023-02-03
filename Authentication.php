<?php
session_start();
include('Connection.php');
if (isset($_POST['login_button'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = $connection->prepare("SELECT * FROM crud_table WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if ($password == $result['pwd']) {
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header('Location:Home.php');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}   
?>