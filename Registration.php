<?php

require_once('Connection.php');
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    if($password == $confirmPassword)
    { 
        if($con) 
        {
            $sql = "INSERT INTO `crud_table` (`first_name`, `last_name`, `email`, `pwd`) VALUES ('$firstName', '$lastName', '$email', '$password')";
            $result = mysqli_query($con, $sql);
            if($result) {
                echo "Registration successfull";
            } else {
            die(mysli_error($con));
            }
        }
    }

?>