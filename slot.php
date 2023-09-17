<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginregiser(parkingapp)";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
      body {
        background-color: lightgray;
      }
    </style>
</head>
<body>
    
<header>

<h1>Parkify</h1>
</header>

<nav></nav>




</div>

                    <div class="container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                            <h1>Select your parking slot</h1>
                            <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search your parking lot</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <?php

$sql = "SELECT * FROM `parkinglot`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
  echo 'Your Parking slot is -  ';
        echo $row["name"];
    }
} 
$conn->close();
?>
            <thead>
                                <tr>
                                <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                                    <th>Select Your parkingspace</th>
                                     <th></th>

                                    </form>
                             
                                </tr>

                            </thead>
                           
                            <tbody>


<?php 

$con = mysqli_connect("localhost","root","","loginregiser(parkingapp)");

if(isset($_GET['search']))
{
$filtervalues = $_GET['search'];
$query = "SELECT * FROM  `slot`  WHERE CONCAT(`Address`, `slot`) LIKE '%$filtervalues%' ";
$query_run = mysqli_query($con, $query);

 if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $items)
{
?>
<tr>
                        <div class="form">

  
                        <td>
                            <form method="post" enctype="multipart/form-data" name="vehicledata">
                                <form action="" method="POST">
                                    <form action="" id="Address">
                                        <?= $items['Address']; ?>
                                   
                                </form>
                        </td>
                        <td>
                            <img src="<?= $items['slot']; ?>" alt="Image" width="222px" height="350px">
                        </td>
                    
                                 
</tr>
</div>
<?php
}
}
else
{

?>
                <tr>
                    <td colspan="2">No Record Found</td>
                </tr>>
                                 <?php
                                        }
                                    }
                                ?>
                         
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <tr>
    </tr>

    </tbody>
</table>   
</table>

    <div class="post">
    <form class="my-5" method="post" enctype="multipart/form-data">
 
    <input type="text" name="name" id="name" required  >

    
    <input type="submit" name="submit" id="submit" value="confirm sopt">
    <button type="button" id="submit" onclick="location.href='http://localhost/xampp/ParkingSystem/MPayment.php'">NEXT -></button>


    </div>

    
<?php


$conn =mysqli_connect("localhost","root","","loginregiser(parkingapp)");

if(isset($_POST['submit'])){
    $name = $_POST['name'];

    $quary = "INSERT INTO `parkingspace`(`name`) VALUES('$name')";
    $res =mysqli_query($conn, $quary);
    if($res){
        move_uploaded_file($_POST['name'],"$name");
    }
}
?>
  
  <script>
 
document.addEventListener('mouseup', function() {
  var selectedText = window.getSelection().toString();
  document.getElementById('name').value = selectedText;
});

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


<footer>
© 2023-Privacy Policy | Parkify
</footer>
<style>

.submit{

font-size: 20px;
}

header h1{
margin-top: 15px;
margin-left: 5px;
width: 98%;
height: 50px;
color:red ;
text-align: center;
}

.post{

font-size: 26px;
margin: 30px;
margin-bottom: 50px;

padding-left: 300px;
}

.row{
    font-style: italic;
font-size: 30px;
text-align: center;
}

.container{
background-color: lightgray;
background: red;
    font-size: 30px;
    font-style: italic;  
      
}

#submit:hover {
  background-color: #0056b3; 
}

.row{
    background-color: lightgray;
}

#submit {
  background-color: #007bff; 
  color: #fff; 
  border: none; 
  padding: 8px 50px; 
  cursor: pointer; 
}

.form{
 display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
  gap: 10px; 
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
font-size: 20px;
  margin: 50px;
margin-bottom: 20px;
margin-left: 5px;
padding-left: 20px;
}

footer{

margin-top: 100px;
margin-left: 15px;
width: 98%;
height: 28px;
color: blue;
border-radius: 5px;
background-color: rgb(255, 127, 127);
float: left;
text-align: center;
}
</style>

</body>
</html>


