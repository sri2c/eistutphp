<?php
 include_once "connect.php";
 
 session_start();
 
 $user = strip_tags($_POST['username']);
 $pass = md5 (strip_tags($_POST['password']));

 // lookup user in the db
 $query = sprintf("SELECT uid FROM users WHERE email = '$user' and password = '$pass'", mysql_real_escape_string($user), mysql_real_escape_string($pass));
 
 
 $result = mysql_query($query);
 
 
 
 // if the the result returned more than 1 result then take user back to the index.php and give an error message.
 if (mysql_num_rows($result) != 1) {
	echo "no User Found";
 	//header( 'Location: index.php?error=y' );
 }
 	
 	
 //Else if there was only one result returned then set that username value to the sessions value and take
 //the user to the secret page.

 else 
 {
	$row = mysql_fetch_assoc($result);
	unset($_SESSION['submit']);
 	unset($_SESSION['uid']);
 	$_SESSION['uid'] = $row['uid'];
	header( 'Location: profile.php');
 }
 
 
 

 //Close the mysql connection.
 mysql_close($conn);
?>
