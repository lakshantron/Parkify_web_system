<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

 //  $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   //$cpass = md5($_POST['cpassword']);
   //$user_type = $_POST['user_type'];

   $select = " SELECT * FROM `login` WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'Admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin/admin.php');

      }elseif($row['user_type'] == 'User'){

        $_SESSION['user_name'] = $row['name'];
        header('location:http://localhost/xampp/ParkingSystem/Home/index.html');
        }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">  
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  
   <link rel="stylesheet" href="css/style.css">-->

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="registration_form.php">register now</a></p>
   </form>

</div>


<style>
   body{

      background-image: url(qqqqqqPresentationaaaa1.png);
            background-repeat: no-repeat;
            background-size: cover;
   }

   
   *{
   font-family: 'Poppins', sans-serif;
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
   color:yellow;
   
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
   color:black;
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
   font-family: Arial, Helvetica, sans-serif;
   text-transform: uppercase;
   color:greenyellow;
}

.form-container form p a{
   color:red;
   text-transform: uppercase;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:yellow;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}

</style>
</body>
</html>