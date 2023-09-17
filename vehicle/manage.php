<?php
require("vehicle-form.php");
?>

<!DOCTYPE html>
<html>  

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="">

  <title>Customer report</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call :0764871803
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email :Kumara.lakshan984@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                Parkify
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
             
              
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="slider_bg_box">
        <img src="images/slider-bg.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      You can come here<br>
                      and with us you can select safe and best parking space
                    </h1>
                  
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
                   
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      We Provide best <br>
                      Transport Service
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>
  <h1>Vehicle Owner Details</h1>

 
<div class="post">

  <form method="post" enctype="multipart/form-data" name="vihecledata">

<table>


<tr><td>Full Name</td>
<td><input type="text" name="txtName" require
value="<?php
if(isset($vihecle))
{
    echo $vihecle->GetName();    
}
?>"
></td></tr>

<tr><td>Address</td>
<td><input type="text" name="txtAddress" require
value="<?php
if(isset($vihecle))
{
    echo $vihecle->GetAddress();    
}
?>"
></td></tr>

<tr><td>Email</td>
<td><input type="Email" name="txtEmail" require
value="<?php
if(isset($vihecle))
{
    echo $vihecle->GetEmail();    
}
?>"
></td></tr>

<tr><td>ID Number</td>
<td><input type="text" name="txtNic" require
value="<?php
if(isset($vihecle))
{
    echo $vihecle->GetNic();    
}
?>"
></td></tr>

<tr><td>Telephone Number</td>
<td><input type="number" name="txtPhone" require
value="<?php
if(isset($vihecle))
{
    echo $vihecle->GetNumber();    
}
?>"
></td></tr>



       
<tr><td>Vehicle Class</td>
 <td>
<select name="Type" id="Type"

value="<?php
    if(isset($vihecle))
    {

        echo $vihecle->GetType();
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
if(isset($vihecle))
{
    echo $vihecle->GetModel();    
}
?>"
></td></tr>

<tr><td>Vihecle Plate Number</td>
<td><input type="text" name="txtNumber" require 
value="<?php
if(isset($vihecle))
{
    echo $vihecle->GetNumber();    
}
?>"
></td></tr>

</tr>
<tr><td></td>
<td>
<div>

  <input type="submit" id="submit" value="Confirm" name="btnAdd">

</div>
</td></tr>
<tr><td></td><td></td></tr>
</table>
</div>

<div class="btn">
<a class="nav-link" href="http://localhost/xampp/ParkingSystem/displaycity.php">NEXT</a>
</div>


<?php

if(isset($_POST["btnAdd"]))
{
    
    try {
        
        $vihecle =new vihecle();
        $vihecle->SetName($_POST["txtName"]);
        $vihecle->SetAddress($_POST["txtAddress"]);
        $vihecle->SetEmail($_POST["txtEmail"]);
        $vihecle->SetNic($_POST["txtNic"]);
        $vihecle->SetPhone($_POST["txtPhone"]);
        $vihecle->SetType($_POST["Type"]);
        $vihecle->setModel($_POST["txtModel"]);
        $vihecle->SetNumber($_POST["txtNumber"]);


        
        $id=$vihecle->Add();
        $vihecle->SetID($id);



    } catch (Exception $e) {
        echo "DB Error". $e->getMessage();

    }
}
?>



  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
          
              </h2>
            </div>
        
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/001.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

 

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our <span>Client</span>
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-1.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-2.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-1.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-2.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container contact-form">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call 0764871803
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about.html">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="service.html">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="contact.html">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

  <style>

body {
  background-color:rgba(0,12,34,255);
  color: white;
 
  
}

h1{

  margin-left: 350px;
  margin-bottom: 50px;
  margin-top: 20px;
  font-family: 'Times New Roman', Times, serif;
  color: red;

}
.post{

margin-left: 300px;
margin-bottom: 10px;
font-family: 'Times New Roman', Times, serif;
font-size: large;

display: grid;
    grid-template-columns: 1fr;
    grid-gap: 10px;

}

.post table tr {
    margin-bottom: 10px; /* Adjust the margin as needed */
}

.post input {
    padding: 5px; /* Adjust the padding as needed */
}


#submit {
  margin-top: 100px;
  margin-left: 50px;
  background-color: #007bff; 
  color: #fff; 
  border: none; 
  padding: 8px 50px; 
  cursor: pointer; 
}

.btn{

  margin-top: 100px;
  margin-left: 50px;
  background-color: #007bff; 
 
  border: none; 
  padding: 8px 50px; 
 
}
  </style>

</body>

</html>