<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Signup.css">
        <title>Sign up</title>
    </head>
    <body>
        <?php
            require('./connection.php');
            if (isset($_POST['sigUp_button'])) {
                $firstName=$_POST['firstName'];
                $lastName=$_POST['lastName'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $configPassword=$_POST['confirmPassword'];
                if(!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                    if ($password==$configPassword) {
                        $p=xampp_crud::connect()->prepare('INSERT INTO crud_table(first_name,last_name,email,pwd) VALUES(:f,:l,:e,:p)');
                        $p->bindValue(':n', $firstName);
                        $p->bindValue(':l', $lastName);
                        $p->bindValue(':e', $email);
                        $p->bindValue(':p', $password);
                        $p->execute();
                        echo 'Successfully Registered';
                    }
                    else
                    {
                       echo 'Password does not match'; 
                    }                
                }
                
                }
        ?>
        <div class="form">
            <div class="title">
                <p>sign up form</p>
            </div>
            <form action="" method="post">
                <input type="text" name="firstName" placeholder="First Name">
                <input type="text" name="lastName" placeholder="Last Name">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirmPassword" placeholder="Confirm Password">
                <input type="submit" name="signUp_button" value="Sign Up">
            </form>
        </div>
    </body>
</html>