<?php
/* Displays all successful messages */
require 'db.php';
session_start();
?>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ){
        echo $_SESSION['message'];
      }
    else{
        header( "location: ../login.php" );
      }
    if( isset($_POST['submit']) ){
      $email = $_SESSION['email'];
      $result = $conn->query("SELECT * FROM logindetails WHERE email='$email'");
      $user = $result->fetch_assoc();
      $_SESSION['license']=$_POST['license'];
      $_SESSION['address']=$_POST['address'];
      $_SESSION['phone']=$_POST['phone'];
      $license=$_SESSION['license'];
      $address=$_SESSION['address'];
      $phone=$_SESSION['phone'];
      $sql = $conn->query("UPDATE logindetails SET license='$license' WHERE email='$email'");
      $conn->query($sql);
      $sql = $conn->query("UPDATE logindetails SET address='$address' WHERE email='$email'");
      $conn->query($sql);
      $sql = $conn->query("UPDATE logindetails SET phone='$phone' WHERE email='$email'");
      $conn->query($sql);
      header( "location:profile1.php" );
      }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Success</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

      <form method="post" class="form-signin" action="success.php">
        <h2 class="form-signin-heading">Enter Details</h2>
        <input type="text" id="inputEmail" class="form-control" name="license" placeholder="license" required>
        <input type="address" class="form-control" name="address" placeholder="address" required>
        <input type="tel" class="form-control" name="phone" placeholder="Phone no" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Go to profile</button>

      </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
