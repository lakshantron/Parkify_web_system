<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM `login` WHERE  `email` = '$email' && password ='$pass'";
    
    $resuilt= mysqli_query($conn, $select);

    if(mysqli_num_rows($resuilt)>0){

        $error[] = 'user already exsist';
    }else{

        if($pass !=$cpass){
            $error[] = 'password not matched';
        }else{

            $insert = "INSERT INTO `login`(name, email, password, user_type)
             VALUES('$name','$email','$pass','$user_type')";
             mysqli_query($conn, $insert);
             header(('location:login_form.php'));
        }
    }
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register form </title>

    
</head>
<body>
    
<div class ="form-container">

    <form action="" method="post">
        <h3>Register now</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class = "error- msg">' .$error.'</spain>';
            };
        };
        ?>
        <input type="text" name="name" required placeholder = "enter the name">
        <input type="email" name="email" required placeholder="Enter the email">
        <input type="password" name="password" required placeholder="Enter the password">
        <input type="password" name="cpassword" required placeholder="Enter the password agine">

        <select name="user_type">

        <option value="User">User</option>
        <option value="Admin">Admin</option>
        </select>

        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>Already have an account <a href="login_form.php">Log in now</a></p>
    </form>

</div>

<footer>
© 2023-Privacy Policy | Game room
</footer>

<style>

body{

background-image: url(Presentationaaaaaaa1.png);
      background-repeat: no-repeat;
      background-size: cover;
}

    
*{
   font-family:'Times New Roman', Times, serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}


.container{
min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
padding:20px;
padding-bottom: 60px;
}

.form-container{
min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
padding:20px;
padding-bottom: 60px;


}

.form-container form{
padding:20px;
border-radius: 5px;
box-shadow: 0 5px 10px rgba(0,0,0,.1);

text-align: center;
width: 500px;
}

.form-container form h3{
font-size: 30px;
text-transform: uppercase;
margin-bottom: 10px;
color:#d80000;

}

.form-container form input,
.form-container form select{
width: 100%;
padding:10px 15px;
font-size: 17px;
margin:8px 0;

border-radius: 5px;
}

.container .content h1{
font-size: 50px;
color:#e40000;
}

.form-container form .form-btn{
background: #fbd0d9;
color:rgb(30, 0, 165);

text-transform: capitalize;
font-size: 20px;
cursor: pointer;
}

.form-container form .form-btn:hover{
background: crimson;

}

.form-container form p{

margin-top: 10px;
font-size: 20px;
color:#dbdf01;
}

.form-container form p a{
color:crimson;
}

.form-container form .error-msg{
margin:10px 0;
display: block;
background: crimson;
color:#fff;
border-radius: 5px;
font-size: 20px;
padding:10px;
}

</style>

</body>
</html>