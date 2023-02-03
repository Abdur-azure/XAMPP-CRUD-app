<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Signup.css">
        <title>Login</title>
        <style>
            .form{
                width: 230px;
                height: 280px;
            }
        </style>
    </head>
    <body>
        <div class="form">
            <div class="title">
                <p>login</p>
            </div>
            <form action="Authentication.php" method="POST">                
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="login_button" value="Login">
            </form>
        </div>
    </body>
</html>