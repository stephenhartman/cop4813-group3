<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>uLike</title>
  <!--Style CSS-->
  <link rel="stylesheet" type="text/css" href="../style.css">
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

  <!--w3 CSS Icons-->
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Custom JS-->
  <script src="../js/iconBar.js"></script>
  <script src="../js/sidebarOpacity.js"></script>
  <script src="../js/imgup.js"></script>
  <script src="../js/datepick.js"></script>
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
      <!--* * * * * * * * * * * *EDITED BY ADRIAN* * * * * * * * * * * * * * * * *-->
      <div class="row">
        <div class="col-md-6">
          <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="submitted" value = "true"/>
          <h3> Step 1: Upload the picture</h3>
          <div class="form-group">
            <label>Upload Image</label>
            <div class="input-group">
              <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                        Browse <input type="file" id="imgInp" name="image"/>
                    </span>
              </span>
              <input type="text" class="form-control" readonly/>
            </div>
            <img id="img-upload" width="100%" height="auto"/>

            <h3> Step 2: Give Album Details </h3>
            <label for="albumName">Album Name:</label>
            <input type="text" class="form-control" id="albumName" name="albumName"/>

            <label for="artistName">Artist Name:</label>
            <input type="text" class="form-control" id="artistName" name="artistName"/>

            <label class="control-label" for="date">Album Year:</label>
            <input class="form-control" id="date" name="date" placeholder="YYYY" type="text"/>

            <label for="genre">Album Genre:</label>
            <select class="form-control" id="genre" name="genre">
                <option value="">Select Genre:</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
                <option value="Country">Country</option>
                <option value="R&B">R&B</option>
                <option value="HipHop">HipHop</option>
                <option value="Metal">Metal</option>
              </select>


            <label for="spotifyLink">Spotify Link:</label>
            <input type="text" class="form-control" id="spotifyLink" name="spotifyLink"/>

            <label for="uploadedBy">Uploaded by:</label>
            <input type="text" class="form-control" id="uploadedBy" name="uploadedBy" readonly/>
        </div>
      </div>
        <div class="col-md-6">
          <div id="uploadResult">
            <br>
            <img id="img-upload-reflect" width="50%" height="50%"/>
            <br>
            <h4>Album Name: <b><small class="small-reflect" id="albumNameReflect"></small></b></h4>
            <h4>Artist: <b><small class="small-reflect" id="artistReflect"></small></b></h4>
            <h4>Album Year: <b><small class="small-reflect" id="dateReflect"></small></b></h4>
            <h4>Album Genre: <b><small class="small-reflect" id="genreReflect"></small></b></h4>
            <h4>Spotify Link: <b><small class="small-reflect" id="spotifyLinkReflect"></small></b></h4>
            <h4>Uploaded by: <b><small class="small-reflect" id="uploadedByReflect"></small></b></h4>
            <br>
          </div>
          <h3> Step 3: Press Submit </h3>
          <button type="submit" class="btn btn-add-album btn-large btn-block" formaction="addAlbum.php" name="submitData">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/reflection.js"></script>
</body>
</html>
