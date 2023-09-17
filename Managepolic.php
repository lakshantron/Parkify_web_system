<?php
require("police.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" enctype="multipart/form-data" name="vihecledata">


<table>


<tr><td>Suspect Name</td>
<td><input type="text" name="txtName" require
value="<?php
if(isset($panel))
{
    echo $panel->GetName();    
}
?>"
></td></tr>

<tr><td>Suspect Address</td>
<td><input type="text" name="txtAddress" require
value="<?php
if(isset($panel))
{
    echo $panel->GetAddress();    
}
?>"
></td></tr>

<tr><td>Suspect Email</td>
<td><input type="Email" name="txtEmail" require
value="<?php
if(isset($panel))
{
    echo $panel->GetEmail();    
}
?>"
></td></tr>

<tr><td>Suspect NIC</td>
<td><input type="text" name="txtNic" require
value="<?php
if(isset($panel))
{
    echo $panel->GetNic();    
}
?>"
></td></tr>

<tr><td>Suspect Phone Number</td>
<td><input type="number" name="txtPhone" require
value="<?php
if(isset($panel))
{
    echo $panel->GetNumber();    
}
?>"
></td></tr>



       
<tr><td>Vehicle Class</td>
 <td>
<select name="Type" id="Type"

value="<?php
    if(isset($panel))
    {

        echo $panel->GetType();
    }
    
    ?>"
>
    <optgroup label="Vehicle Catagory">
   <option value="light_motorcycles" class="motorcycle-option">Light motor cycles</option>
   <option value="Three Wheels  ">Three Wheels  </option>
   <option value="Motorcycles ">Motorcycles </option>
   <option value="Motorcycles ">Motorcycles </option>
   <optgroup label="Dual purpose Motor vehicle">
   <option value="Motor car ">Motor car </option>
   <option value="Lorrie ">Lorrie </option>

</optgroup>
</select>
 </td></tr>

 <tr><td>Vihecle Model</td>
<td><input type="text" name="txtModel" require placeholder="Your vihecle Brand name"
value="<?php
if(isset($panel))
{
    echo $panel->GetModel();    
}
?>"
></td></tr>

<tr><td>Vihecle Plate Number</td>
<td><input type="text" name="txtNumber" require 
value="<?php
if(isset($panel))
{
    echo $panel->GetNumber();    
}
?>"
></td></tr>

<tr><td>Police Station</td>
 <td>
<select name="Typepolice" id="Typepolice"

value="<?php
    if(isset($panel))
    {

        echo $panel->GetType();
    }
    
    ?>"
>
    <optgroup label="The police station to which belongs">
   <option value="Kandy Police department" class="motorcycle-option">Kandy Police department</option>
   <option value="Colombo Police Department  ">Colombo Police Department  </option>
   <option value="Akurana Police Depatment ">Akurana Police Depatment </option>
   <option value="GrandPass Police department ">GrandPass Police department  </option>

   <option value="Borella Police department ">Borella Police department </option>
   
</optgroup>
</select>
 </td></tr>

</tr>
<tr><td></td>
<td>
<div>
    <input type="submit" value="Conform" name="btnAdd">
</div>
</td></tr>
<tr><td></td><td></td></tr>
</table>

<?php
if(isset($_POST["btnAdd"]))
{
    try{

    $panel =new panel();
    $panel->SetName($_POST["txtName"]);
    $panel->SetAddress($_POST["txtAddress"]);
    $panel->SetEmail($_POST["txtEmail"]);
    $panel->SetNic($_POST["txtNic"]);
    $panel->SetPhone($_POST["txtPhone"]);
    $panel->SetType($_POST["Type"]);
    $panel->setModel($_POST["txtModel"]);
    $panel->SetNumber($_POST["txtNumber"]);
    $panel->SetPolice($_POST["Typepolice"]);

    $id=$panel->Add();
    $panel->SetID($id);

    
} catch (Exception $e) {
    echo "DB Error". $e->getMessage();

}

}
?>
</body>
</html>