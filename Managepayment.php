<?php
require("peyment.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form-container">

<form method="post" enctype="multipart/form-data" name="vihecledata">

<table>

<div class="post">
  
<h3 class="title">billing address</h3>

<tr><td>Full Name</td>
<td><input type="text" name="txtName" require 
value="<?php
if(isset($payment))
{
    echo $payment->GetName();    
}
?>"
></td></tr>

<tr><td>Email</td>
<td><input type="email" name="txtemail" require
value="<?php
if(isset($payment))
{
    echo $payment->GetEmail();    
}
?>"
></td></tr>

<tr><td>Address</td>
<td><input type="text" name="txtAddress" require
value="<?php
if(isset($payment))
{
    echo $payment->GetAddress();    
}
?>"
></td></tr>

<tr><td>City</td>
<td><input type="text" name="txtCity" require
value="<?php
if(isset($payment))
{
    echo $payment->GetCity();    
}
?>"
></td></tr>

<tr><td>Country(State)</td>
<td><input type="text" name="txtState" require
value="<?php
if(isset($payment))
{
    echo $payment->GetState();    
}
?>"
></td></tr>


</div>           


<tr><td>Zip Code</td>
<td><input type="text" name="txtZip" require
value="<?php
if(isset($payment))
{
    echo $payment->GetZip();    
}
?>"
></td></tr>



<td><h3>payment</h3></td>



<tr><td>name on card</td>
<td><input type="text" name="txtCard" require
value="<?php
if(isset($payment))
{
    echo $payment->GetCard();    
}
?>"
></td></tr>

<tr><td>credit card number</td>
<td><input type="text" name="txtCardnumber" require
value="<?php
if(isset($payment))
{
    echo $payment->GetCardnumber();    
}
?>"
></td></tr>

<tr><td>Price</td>
<td><input type="text" name="txtPrice" require
value="<?php
if(isset($payment))
{
    echo $payment->GetPrice();    
}
?>"
></td></tr>

<tr><td>exp month</td>
<td><input type="text" name="txtexp" require
value="<?php
if(isset($payment))
{
    echo $payment->GetExp();    
}
?>"
></td></tr>

<tr><td>exp Year</td>
<td><input type="text" name="txyear" require
value="<?php
if(isset($payment))
{
    echo $payment->GetExpyear();    
}
?>"
></td></tr>

</div>
</tr>
<tr><td></td>
<td>
<div>
    <input type="submit" value="Conform The payment" name="btnAdd">
</div>
</td></tr>
<tr><td></td><td></td></tr>
</table>


<?php

if(isset($_POST["btnAdd"]))
{
    try {
        
        $payment =new payment();
        $payment->SetName($_POST["txtName"]);
        $payment->SetEmail($_POST["txtemail"]);
        $payment->SetAddress($_POST["txtAddress"]);
        $payment->SetCity($_POST["txtCity"]);
        $payment->SetState($_POST["txtState"]);
        $payment->SetZip($_POST["txtZip"]);
        $payment->SetCard($_POST["txtCard"]);
        $payment->SetCardnumber($_POST["txtCardnumber"]);
        $payment ->SetPrice($_POST["txtPrice"]);
        $payment->SetExp($_POST["txtexp"]);
        $payment->SetExpyear($_POST["txyear"]);



        
        $id=$payment->Add();
        $payment->SetID($id);



    } catch (Exception $e) {
        echo "DB Error". $e->getMessage();

    }
}
?>

<style>

.post{

    margin-left: 20px;
}

    </style>
</body>
</html>