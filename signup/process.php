<?php
	include_once "connect.php";

	$first_name = $_POST["first"];
	$last_name = $_POST["last"];
	$email = $_POST["email"];
	$password = md5(strip_tags($_POST['password']));	
	$dob = $_POST["dob"];
	//$dp = 
	$sex = $_POST["sex"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$country = $_POST["country"];
	$zip = $_POST["zip"];
	$phone = $_POST["phone"];	


	//echo $firstname.$lastname.$address.$PIN.$landline.$mobile;
	

	$sql_user = "INSERT INTO users (`uid`, `email`, `password`, `first_name`, `last_name` ) VALUES (NULL, '$email' , '$password' , '$first_name', '$last_name');";

	if (!mysql_query($sql,$conn))
  	{
  		die('Error: ' . mysql_error());
  	}
	
	//figure out the UID
	$sql_getuser = sprintf("SELECT * FROM users WHERE email = '$email'");
	$result = mysql_query($sql_getuser);
 	$row = mysql_fetch_assoc($result);
	$uid = $row['uid'];
	
	$sql_profile = sprintf("INSERT INTO profiles (`uid`, `dob`, `dp`, `sex`, `city`, `state`, `country`, `zip`, `phone`) VALUES ('$uid', '$dob', '$dp', '$sex', '$city', '$state', '$country', '$zip', '$phone')");
	
	echo "goodbye world";


?>
