<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

    <form action="" method="POST"> <!-- Added method="POST" -->

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="Name" required placeholder="">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" required  placeholder="">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="Address" required placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="City" required placeholder=""> <!-- Corrected name attribute -->
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" required placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="Zip" required placeholder=""> <!-- Corrected name attribute -->
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="Card" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="text" name="Cardnumber" placeholder="1111-2222-3333-4444">
                </div>

                <div class="inputBox">
                    <span>Price :</span>
                    <input type="number" name="price" placeholder="Rs:10000">
                </div>


                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="Exp" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="Expyear" placeholder="2022">
                    </div>
                </div>

            </div>

        </div>
        <input type="submit" name="submit" id="submit" value="confirm Payment" onclick="location.href='http://localhost/xampp/ParkingSystem/customer_report/index.php'" class="submit-btn">
        
        <button type="button" id="sub" onclick="location.href='http://localhost/xampp/ParkingSystem/customer_report/index.php'">NEXT-></button>



    </form>



    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        $conn = mysqli_connect("localhost", "root", "", "loginregiser(parkingapp)");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Sanitize and retrieve form data
        $name = mysqli_real_escape_string($conn, $_POST['Name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = mysqli_real_escape_string($conn, $_POST['Address']);
        $city = mysqli_real_escape_string($conn, $_POST['City']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $zip = mysqli_real_escape_string($conn, $_POST['Zip']);
        $card = mysqli_real_escape_string($conn, $_POST['Card']);
        $cardnumber = mysqli_real_escape_string($conn, $_POST['Cardnumber']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $exp = mysqli_real_escape_string($conn, $_POST['Exp']);
        $expyear = mysqli_real_escape_string($conn, $_POST['Expyear']);

        // Create the SQL query using prepared statement
        $query = "INSERT INTO `payment` (`Name`, `email`, `Address`, `City`, `State`, `Zip`, `Card`, `Cardnumber`,`price`, `Exp`, `Expyear`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);

        // Bind the parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, 'sssssssssss', $name, $email, $address, $city, $state, $zip, $card, $cardnumber,$price, $exp, $expyear);

        // Execute the prepared statement
        $res = mysqli_stmt_execute($stmt);

        if ($res) {
            
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);

        // Close the connection
        mysqli_close($conn);
    }
    ?>
</div>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

#sub{
margin-top: 5px;
  margin-left: 200px;
  background-color: #007bff; 
  color: #fff; 
  border: none; 
  padding: 12px 200px; 
  cursor: pointer; 
}

#sub:hover {
  background-color: #0056b3; 
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background: linear-gradient(90deg, #2ecc71 60%, #27ae60 40.1%);
}

.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #27ae60;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #2ecc71;
}
</style>
</body>
</html>
