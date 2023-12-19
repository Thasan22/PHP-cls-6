<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    $emails = ["thasan@gmail.com","sakib@gmail.com"];
    if(isset($email) == $emails){
        echo "<h1>Login Success!</h1>";
        $email = $_POST['email'];
        echo "$email";
    }else{
        echo "invalid";
    }
        
    ?>




</body>
</html>
