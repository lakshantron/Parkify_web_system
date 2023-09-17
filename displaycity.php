<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginregiser(parkingapp)";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['save'])) {

    $name = $_POST['name'];

      $query ="INSERT INTO `upload`(`image`) VALUES('$name') ";

    if ($conn->query($sql) === true) {
        echo "Data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Funda Of Web IT</title>

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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Parking lots near your Destination</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                            <form action="" method="GET">
                                    <div class="input-group mb-8">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Enter your Destination</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 <thead>
                                <tr>
                                <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                                    <th>Parking lots near Your Destination</th>
                                     <th> -</th>

                                    </form>
                             
                                </tr>

                            </thead>
                             <tbody>
                     <?php 

        $con = mysqli_connect("localhost","root","","loginregiser(parkingapp)");

     if(isset($_GET['search']))
     {
      $filtervalues = $_GET['search'];
    $query = "SELECT * FROM `upload` WHERE CONCAT( `name`, `image`) LIKE '%$filtervalues%' ";
     $query_run = mysqli_query($con, $query);

         if(mysqli_num_rows($query_run) > 0)
     {
     foreach($query_run as $items)
    {
    ?>
<tr>

<div class="form">

<form method="post" enctype="multipart/form-data" name="vihecledata">
    <form action="" method="POST">
</p><form action="" id="Address">
<td><?= $items['Address']; ?></td>
 </form>
                                                   
<td><img src="<?= $items['image']; ?>" alt="Image" width="450px" height="300px"></td>
                        
 </tr>
 </div>
<?php
}
     }
        else
    {
 ?>
 <tr>
 <td colspan=>No Record Found</td>
 </tr>
                                 <?php
                                        }
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <tr>
    </tr>
<div class="post">
    <form class="my-5" method="post" enctype="multipart/form-data">
 
    <input type="text" name="name" id="name" require >

    
    <input type="submit" name="submit" id="submit" value="confirm lot">
    </div>
   <?php

$conn =mysqli_connect("localhost","root","","loginregiser(parkingapp)");

if(isset($_POST['submit'])){
    $name= $_POST['name'];

    $query ="INSERT INTO `parkinglot`(`name`) VALUES ('$name')";
    $res = mysqli_query($conn,$query);
    if($res){
        move_uploaded_file($_POST['name'],"$name");
 }
}
?>

<button type="button" id="sub" onclick="location.href='http://localhost/xampp/ParkingSystem/slot.php'">NEXT -></button>


<script>

  document.addEventListener('mouseup', function() {
    var selectedText = window.getSelection().toString();
    document.getElementById('name').value = selectedText;
  });

</script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <footer>
© 2023-Privacy Policy | Game room
</footer>

    <style>

body {
  background-color: lightgray;
}
        
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

.container{
background-color: lightgray;
background: #007bff;
    font-size: 30px;
    font-style: italic;    
}

.row{
    background-color: lightgray;
}

.col-md-12{
    background-color: lightgray;
}

.card-header{
    background-color: lightgray;  
}

.input-group{

    background-color: lightgray;  
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

.post{

    font-size: 26px;
  margin: 30px;
margin-bottom: 50px;

padding-left: 300px;
}

#submit {
  background-color: #007bff; 
  color: #fff; 
  border: none; 
  padding: 8px 80px; 
  cursor: pointer; 
}

#submit:hover {
  background-color: #0056b3; 
}

#sub{
margin-top: 5px;
  margin-left: 700px;
  background-color: #007bff; 
  color: #fff; 
  border: none; 
  padding: 8px 80px; 
  cursor: pointer; 
}

#sub:hover {
  background-color: #0056b3; 
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