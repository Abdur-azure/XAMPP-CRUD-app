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
        <?php
            require('./Connection.php');
            if(isset($_POST['login_button'])) {
                $_SESSION['validate']=false;
                $email=$_POST['email'];
                $password=$_POST['password'];
                $p=xampp_crud::connect()->prepare('SELECT * FROM crud_table WHERE email=:e and pwd=:p');
                $p->bindValue(':e',$email);
                $p->bindValue(':p',$password);
                $p->exceute();
                $d=$p->fetchAll(PDO::FETCH_ASSOC);
                if($p->rowCount()>0) {
                    $_SESSION['email']=$email;
                    $_SESSION['pwd']=$password;
                    $_SESSION['validate']=true;
                    header('location:Home.php');
                }else {
                    echo 'Make sure you are registered!';
                }
            }
        ?>
        <div class="form">
            <div class="title">
                <p>login</p>
            </div>
            <form action="" method="post">                
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="login_button" value="Login">
            </form>
        </div>
    </body>
</html>