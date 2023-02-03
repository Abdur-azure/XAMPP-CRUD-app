<?php
session_start();
include('Connection.php');
if (isset($_POST['signUp_button'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM crud_table WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO crud_table(first_name,last_name,email,pwd) VALUES (:fn,:ln,:e,:p)");
        $query->bindParam("fn", $firstName, PDO::PARAM_STR);
        $query->bindParam("ln", $lastName, PDO::PARAM_STR);
        $query->bindParam("e", $email, PDO::PARAM_STR);
        $query->bindParam("p", $password, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>