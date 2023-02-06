<?php 
// Include the database configuration file  
require_once 'Connection.php'; 
 
// Get image data from database 
$result = $connection->query("SELECT image FROM crud_image ORDER BY id ASC"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="./main.css">
        <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
        <title>Home</title>
    </head>
    <body>
        <div class="header">
            <h1>Welcome to Home page here your can upload the picture</h1>
        </div>
        <div class="fileupload">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="image" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
              </form>
        </div>
        <div class="buttons">
            <input type="submit" name="sign_up" value="Signup" onclick="document.location='Signup.php'">
            <input type="submit" name="login" value="Login" onclick="document.location='Login.php'">
        </div>
            <?php if($result){ ?> 
        <div class="gallery"> 
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)){ ?> 
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
            <?php } ?> 
        </div> 
            <?php }else{ ?> 
                <p class="status error">Image(s) not found...</p> 
            <?php } ?>
        <script src="./main.js"></script>
    </body>
</html>