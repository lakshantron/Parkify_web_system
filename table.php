<?
require("deleteData.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
<header>
        <h1>
            Customer report
    </h1>
    </header>


<table class="table">
    <thead>
        <tr>
        <th>Id</th>

<th>Parking lot</th>
<th>Parking slot ID </th>
<th>Parking slot </th>
<th>customer ID </th>
<th>Customer name </th>
<th>Customer Address</th>
<th>Customer Email</th>
<th>Customer Nic</th>
<th>Customer telephone</th>
<th>Vehicle type</th>
<th>Vehicle model</th>
<th>Plate number</th>
<th>Payment ID </th>
<th>City</th>
<th>Payment(state)</th>
<th>zip</th>

<th>card</th>
<th>card number</th>
<th>price</th>
<th>Exp</th>
<th>exp date</th>
        </tr>
    </thead>
    <tbody>


    <?php
    
   

    $connection = mysqli_connect("localhost", "root", "", "loginregiser(parkingapp)");

    $query = "SELECT parkinglot.o_ID, parkinglot.name, parkingspace.s_ID, parkingspace.name, 
    vihecle.v_ID, vihecle.Name, vihecle.Address, vihecle.Email, vihecle.Nic, vihecle.Phone, 
    vihecle.Type, vihecle.Model, vihecle.Number,payment.p_ID, payment.City, payment.State,
     payment.Zip, payment.Card, payment.Cardnumber, payment.price, payment.Exp, 
     payment.Expyear 
     FROM parkinglot, parkingspace,payment, vihecle
      ORDER BY parkinglot.o_ID;";


$result = mysqli_query($connection, $query);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $row["o_ID"] . "</td>";
    echo "<td>" . $row["name"] . "</td></td>";
    echo "<td>" . $row["s_ID"] . "</td></td>";
    echo "<td>" . $row["name"] . "</td></td>";
 
    echo "<td>" . $row["v_ID"] . "</td></td>";
    echo "<td>" . $row["name"] . "</td></td>";
    echo "<td>" . $row["Address"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td>" . $row["Nic"] . "</td>";
    echo "<td>" . $row["Phone"] . "</td>";

    echo "<td>" . $row["Type"] . "</td>";
    echo "<td>" . $row["Model"] . "</td>";
    echo "<td>" . $row["Number"] . "</td>";
 
    echo "<td>" . $row["p_ID"] . "</td>";
    echo "<td>" . $row["City"] . "</td>";
    echo "<td>" . $row["State"] . "</td>";
    echo "<td>" . $row["Zip"] . "</td>";
    echo "<td>" . $row["Card"] . "</td>";
    echo "<td>" . $row["Cardnumber"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "<td>" . $row["Exp"] . "</td>";
    echo "<td>" . $row["Expyear"] . "</td>";

   

    echo '<td><a href="deleteData.php?id1=' . $row["o_ID"] . '&id2=' . $row["s_ID"] . '&id3=' . $row["v_ID"] .'&id4=' . $row["p_ID"] . '" class="btn btn-danger">Delete</a></td>';


    echo "</tr>";
}
mysqli_close($connection);
    ?>


<style>
   *{background-color: rgb(255, 248, 248);}

header h1{

    margin-top: 15px;
margin-left: 5px;
width: 97%;
height: 80px;
color:rgb(100, 65, 226) ;
text-align: center;
}

nav{

margin-top: 5px;
margin-left: 30px;
width: 95%;
height: 30px;
background-color: rgb(110, 151, 44);

}

footer{

margin-top: 300px;
margin-left: 15px;
width: 98%;
height: 28px;

border-radius: 5px;
background-color: rgb(255, 127, 127);
float: left;
text-align: center;
}
</style>
</body>
</html>