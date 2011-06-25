<?php 
session_start(); 

if(isset($_SESSION['uid']))
{
	include_once "connect.php";

	$uid = $_SESSION['uid'];

	$query = sprintf("SELECT first_name, last_name, email FROM users WHERE uid = '$uid'");

	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);

	$first = $row['first_name'];
	$last = $row['last_name'];
	$email = $row['email'];
} //END IF AUTHENTICATED SESSION


else
{
header( 'Location: index.php' );
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title></title>
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="view.css" type="text/css" />
	<!--[if lte IE 6]><link rel="stylesheet" href="style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
</head>

<body>

<div id="wrapper">

	<header id="header">
		<strong>Header:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor. Praesent dictum, libero ut tempus dictum, neque eros elementum mauris, quis mollis arcu velit ac diam. Etiam neque. Quisque nec turpis. Aliquam arcu nulla, dictum et, lacinia a, mollis in, ante. Sed eu felis in elit tempor venenatis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ultricies porttitor purus. Proin non tellus at ligula fringilla tristique. Fusce vehicula quam. Curabitur vel tortor vitae pede imperdiet ultrices. Sed tortor.
	</header><!-- #header-->

	<section id="middle">

		<div id="container">
			<div id="content">
				asdasdsadasdasd
			</div><!-- #content-->
		</div><!-- #container-->

		<aside id="sideRight">
			<strong>Right Sidebar:</strong> Integer velit. Vestibulum nisi nunc, accumsan ut, vehicula sit amet, porta a, mi. Nam nisl tellus, placerat eget, posuere eget, egestas eget, dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In elementum urna a eros. Integer iaculis. Maecenas vel elit.
		</aside><!-- #sideRight -->

	</section><!-- #middle-->

</div><!-- #wrapper -->

<footer id="footer">
	&copy; Eistut 2011.&nbsp;&nbsp;<?php echo "<a href='logout.php'>Logout</a>"; ?>
</footer><!-- #footer -->

</body>
</html>
