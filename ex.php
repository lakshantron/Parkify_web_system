<?php
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
        <h1>Customer report</h1>
    </header>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Parking lot</th>
                <th>Parking slot ID</th>
                <th>Parking slot</th>
                <th>customer ID</th>
                <th>Customer name</th>
                <th>Customer Address</th>
                <th>Customer Email</th>
                <th>Customer Nic</th>
                <th>Customer telephone</th>
                <th>Vehicle type</th>
                <th>Vehicle model</th>
                <th>Plate number</th>
                <th>Payment ID</th>
                <th>City</th>
                <th>Payment(state)</th>
                <th>zip</th>
                <th>card</th>
                <th>card number</th>
                <th>price</th>
                <th>Exp</th>
                <th>exp date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "loginregiser(parkingapp)");
            $query = "SELECT 
                parkinglot.o_ID, parkinglot.name AS parking_lot_name, 
                parkingspace.s_ID AS parking_slot_ID, parkingspace.name AS parking_slot_name, 
                vihecle.v_ID AS vehicle_ID, vihecle.Name AS customer_name, 
                vihecle.Address AS customer_address, vihecle.Email AS customer_email, 
                vihecle.Nic AS customer_nic, vihecle.Phone AS customer_phone, 
                vihecle.Type AS vehicle_type, vihecle.Model AS vehicle_model, 
                vihecle.Number AS plate_number, 
                payment.p_ID AS payment_ID, payment.City AS payment_city, 
                payment.State AS payment_state, payment.Zip AS payment_zip, 
                payment.Card AS payment_card, payment.Cardnumber AS payment_card_number, 
                payment.price AS payment_price, payment.Exp AS payment_exp, 
                payment.Expyear AS payment_exp_date 
                FROM parkinglot, parkingspace, payment, vihecle 
                ORDER BY parkinglot.o_ID";

            $result = mysqli_query($connection, $query);

            if (!$connection) {
                die("Database connection failed: " . mysqli_connect_error());
            }
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["o_ID"] . "</td>";
                echo "<td>" . $row["parking_lot_name"] . "</td>";
                echo "<td>" . $row["parking_slot_ID"] . "</td>";
                echo "<td>" . $row["parking_slot_name"] . "</td>";
                echo "<td>" . $row["vehicle_ID"] . "</td>";
                echo "<td>" . $row["customer_name"] . "</td>";
                echo "<td>" . $row["customer_address"] . "</td>";
                echo "<td>" . $row["customer_email"] . "</td>";
                echo "<td>" . $row["customer_nic"] . "</td>";
                echo "<td>" . $row["customer_phone"] . "</td>";
                echo "<td>" . $row["vehicle_type"] . "</td>";
                echo "<td>" . $row["vehicle_model"] . "</td>";
                echo "<td>" . $row["plate_number"] . "</td>";
                echo "<td>" . $row["payment_ID"] . "</td>";
                echo "<td>" . $row["payment_city"] . "</td>";
                echo "<td>" . $row["payment_state"] . "</td>";
                echo "<td>" . $row["payment_zip"] . "</td>";
                echo "<td>" . $row["payment_card"] . "</td>";
                echo "<td>" . $row["payment_card_number"] . "</td>";
                echo "<td>" . $row["payment_price"] . "</td>";
                echo "<td>" . $row["payment_exp"] . "</td>";
                echo "<td>" . $row["payment_exp_date"] . "</td>";

                // Add delete links for each table
                echo '<td><a href="deleteData.php?id=' . $row["o_ID"] . '&table=parkinglot" class="btn btn-danger">Delete Parking Lot</a></td>';
            
                echo "</tr>";
            }
?>