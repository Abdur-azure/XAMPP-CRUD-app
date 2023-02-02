<?php

require_once('Connection.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    //to prevent from mysqli injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($con,$email);
    $password = mysqli_real_escape_string($con,$password);
                        
    if($con)
    {
        $sql = array();
        $sql = "SELECT * FROM `crud_table` (`email`, `pwd`) VALUES ('$email', '$password')";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        if($count == 1) 
        {
           echo "Authentication successfull";
        } 
        else
        {
           die(mysli_error($con));
        }  
    }
?>