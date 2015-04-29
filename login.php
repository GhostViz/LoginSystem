<?php
        include_once('db.php');
 
		$user = mysqli_real_escape_string( $conn, $_POST["user"] );
		$pass = mysqli_real_escape_string( $conn, md5($_POST["pass"]) );
 
		if( empty($user) || empty($pass) )
			echo "Please enter username and password.";
		else
		{
		$sql = "SELECT * FROM users WHERE(user='$user' AND pass='$pass')";
 
	    $result = mysqli_query($conn, $sql);
		$info = mysqli_fetch_array($result);

		if( $info['user'] == $user && $info['pass'] == $pass ) {
			echo "<script> document.location.href = 'member.html'; </script>";
		} else
			echo "Username or password is invalid.";
   		}		
?>