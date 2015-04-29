<?php
      include_once('db.php');

	  $user = mysqli_real_escape_string( $conn, $_POST["user"] );
	  $pass = mysqli_real_escape_string( $conn, md5($_POST["pass"]) );
 
 
	  if( empty($user) && $pass == md5("") )
	  {
	  	echo "Please enter username and password.\n";
		exit();
	  }
	  elseif($pass == md5(""))
	  {
	  	echo "Please enter a password.\n";
	  	exit();
	  }
	  elseif(empty($user))
	  {
	  	echo "Please enter a username.\n";
	  	exit();
	  }
 
 	  $result = mysqli_query($conn, "SELECT user FROM users WHERE user='$user'");
	  $row = mysqli_fetch_row($result);
 
	  if( $row > 0 )
	    echo "$user is already in use.";
	  else
	  {
	   	  $sql = "INSERT INTO Users VALUES('', '$user', '$pass')";
	    if( mysqli_query($conn, $sql) ) 
	 	echo "<script> document.location.href = 'member.html'; </script>"; 
	   else
	    echo "The account was not created.";
	}
?>