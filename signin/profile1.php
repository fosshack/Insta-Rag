<?php
require 'db.php';
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $result = $conn->query("SELECT * FROM logindetails WHERE email='$email'");
    $user = $result->fetch_assoc();
    $_SESSION['address'] = $user['address'];
    $_SESSION['sex'] = $user['m/f'];
    $sex=$_SESSION['sex'];
    $address = $_SESSION['address'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>INSTARAG</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  <link href="../css/style.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/profile1.css" rel="stylesheet">
    <link href="../css/new.css" rel="stylesheet">
  </head>
  <body
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <a href="index.php"><h1><span>insta</span>rag</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="../index.php" >Home</a></li>
                <li role="presentation"><a href="../login.php"class="active">Profile</a></li>
                <li role="presentation"><a href="../stock.php">Stock Exchange</a></li>
                <li role="presentation"><a href="../tech.php">Technology</a></li>
                <li role="presentation"><a href="../contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
    <div class="container-fluid">
      <div class="row">
        <div class="fb-profile">
            <img align="left" class="fb-image-profile thumbnail" src="../images/propic.jpg" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1><?= $first_name ." ". $last_name ?></h1>

            </div>
        </div>
      </div>
    </div> <!-- /container fluid-->
    <div class="container">
      <div class="col-sm-8">

          <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
              <ul class="nav nav-tabs ">
                <li class="active">
                  <a href="#tab_default_1" data-toggle="tab">
                  About </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_default_1">
                  <h4>Email</h4>
                  <p>
                    <?= $email ?>
                  </p>
                  <h4>Sex</h4>
                  <p><?= $sex ?></p>
                </div>

      </div>
    </div>
      </div>
    </div>
          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
