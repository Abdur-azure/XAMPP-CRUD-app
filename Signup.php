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
            if (isset($_POST[''])) {
                
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
                <input type="text" name="password" placeholder="Password">
                <input type="text" name="confirmPassword" placeholder="Confirm Password">
                <input type="submit" name="signUp_button" value="Sign Up">
            </form>
        </div>
    </body>
</html>