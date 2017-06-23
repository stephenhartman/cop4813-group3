<?php
session_start();

$username = $SESSION["username"];
if ($username == ""){
  header("Location: signIn.php?error=3");
  die();
}

include("databaseConnect.php");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>uLike</title>
  <!--jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--Icon-->
  <link rel="icon" href="https://lh3.ggpht.com/7B2IoeJhz_RdHhJm6WNhAfbnL3HTyqdtNDI-291PRIASGESP2oxTkMYtMrww2u9L__c=w300">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <!-- Bootstrap Date-Picker Plugin -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
   <!--Style CSS-->
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
  <!--w3 CSS Icons-->
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Custom JS-->
  <script src="../js/iconBar.js"></script>
  <script src="../js/sidebarOpacity.js"></script>

</head>
<body id="body">
  <!--Hidden Side Nav-->
  <div id="mySidenav" class="sidenav">
    <div class="row">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <div class="row">
        <a href="home.php">Home</a>
    </div>
    <!-- <div class="row">
      <a href="php/signIn.php">Sign in</a>
    </div>
    <div class="row">
      <a href="php/register.php">Register</a>
    </div> -->
    <!--Below rows are to be added in logged in page-->
    <div class="row">
      <a href="myProfile.php">My Profile</a>
    </div>
      <div class="row">
      <a href="addAlbum.php">Add Album</a>
    </div>
      <div class="row">
      <a href="logOut.php">Log out</a>
    </div>
  </div>
  <!--Navbar-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">
          <button type="submit" class="btn" id="iconBar">
            <!-- Use any element to open the sidenav -->
            <div onclick="myFunction(this)">
              <span style="font-size:30px;cursor:pointer" onclick="openNav()"></span>
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
          </button>
          </span>
        </div>
        <div class="col-md-1">
          <div class="navbar-header">
            <a class="navbar-brand" href="main.html">uLike</a>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!--THIS IS WHERE ALL CODE GOES-->
  <div id="main">
    <div class="container">
      <?php
       echo "<h1> This is the My Profile page</h1>";
       ?>
    </div>
  </div>
</body>
</html>
