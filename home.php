<?php

session_start();
if(isset($_SESSION["user id"])){

    $sqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM `users` WHERE id = {$_SESSION["user id"]}"; 

    $resuilt = $mysqli->query($sql);
    $user =$resuilt->fetch_assoc();
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
<h1>Home</h1>
<?php if(isset($user)):?>
<p>Welcome  <?=htmlentities($user["name"])?></p>
<p><a href="login_form.php"><button>Logout</button></a></p>

<?php else: ?>
<p><a href="login_form.php"><button>Logout</button></a></p>
    <?php endif; ?>
</body>
</html>