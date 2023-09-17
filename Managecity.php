<?php
$conn =mysqli_connect("localhost","root","","loginregiser(parkingapp)");

if(isset($_POST['up'])){
    $file= $_FILES['image']['name'];

    $query ="INSERT INTO `upload`(`image`) VALUES('$file') ";
    $res = mysqli_query($conn,$query);
    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center">Upload image</h3>

            <form class="my-5" method="post" enctype="multipart/form-data">
            <input type="file" name="image" class="form-control">
            
            <input type="submit" name="up" value="UPLOAD" class="btn-btn-success">

            </form>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Display Image</h3>
            </div>

        </div>

    </div>

</div>
</body>
</html>