<?php
	session_start();

	$myuser = $_POST["username"];
	$mypass = $_POST["password"];

	$_SESSION["username"] = $username;

    $query = "SELECT username, password FROM Users";
    $result = mysql_query($databaseConnect, $query);

    while ($record = mysql_fetch_array($result)) {
        $username = $record[0];
		    $password = $record[1];

        if($username == $myuser)
        {
          if($password == $mypass)
          {
            header("Location: home.php");
            exit;
          }
          else {
            header("Location: signIn.php?error=2;
            exit;
          }
        }
	  }
	mysqli_close($databaseConnect);
?>
