<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Info| ToursNG</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    </head>
<body class="container-fluid">

<?php 
$con = mysqli_connect("localhost","ossai","ossai","touring");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nok = $_POST['nok'];
$nokphone = $_POST['nokphone'];
$address = $_POST['address'];
if ( isset($_POST['bookbtn']) ) {
    if ($name == '' || $email == '' || $phone == '' || $nok == '' || $nokphone == '' || $address == '') {
        echo '<script type="text/javascript">
        alert ("Fill in Complete Data Please")
        </script>';
        header('Location: index.html');
    } else {
      $query =  mysqli_query($con, "INSERT INTO details (name, email, phone, nok, nokphone, address) VALUES ($name, $email,$phone, $nok, $nokphone, $address)");
      if ($query) {
          echo '<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ToursNG</a>
           
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
    
                    <li class="pull-left">
                        <a href="contactus.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <br>
    <br>';
    echo '<div class="jumbotron">
        <h3>Thank you for patronising...</h3>
        <p>Our Agent would reach out to you</p>
        <a href="index.html" class="btn btn-block btn-default">GO back</a>
    </div>';
      }
    }
}
?>
</body>