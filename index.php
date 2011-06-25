<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<?php session_start(); 
 if(isset($_SESSION['uid'])){
   header( 'Location: profile.php' );
 }

?>
<title>yellow</title>
<link rel="stylesheet" href="vstyle.css" />
</head>



<body>
<?php if(isset($_GET['error']))
 {
 echo "Please enter the correct username and password.";
 }
 ?>
<div class="wrapper">
 <h1 class='yellow_title'>yellow!</h1>

<div class="yellowsearch">
<?php // maybe a search here? ?>
</div>
<div class="yellow_login">
<form action="processLogin.php" method="post" name="search" >
<fieldset class="ylogin_fld" >
<label for="username">
Username</label>
	<input type="text" name="username" class="yellowText"  />
<br />

<label for="password">
Password</label>
<input type="text" name="password" class="yellowText" type="password"/>
<br />

<input name="submitButton" class="submitButton" value="Log In" type="submit" />

</fieldset>
</form>

</div>
</div>

</body>
</html>
