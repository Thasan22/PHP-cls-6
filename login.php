<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
    
    <?php
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $emails = "thasan@gmail.com";
    $passwords = "1234";

    if($email == $emails && $password == $passwords){
        echo "<h1>Login Success!</h1>";
    }else{
    ?>
        <span class="text-danger">
        <?= "invalid email or password";?>
        </span>

    <?php
    }
    ?>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>
