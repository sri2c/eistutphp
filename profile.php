<?php 
 session_start() 
?>

<?php 

 if(!isset($_SESSION['uid'])) {
 	header( 'Location: index.php' );
 }
 
include_once "connect.php";
 
 $uid = $_SESSION['uid'];

 $query = sprintf("SELECT first_name, last_name, email FROM users WHERE uid = '$uid'");

 $result = mysql_query($query);
 $row = mysql_fetch_assoc($result);

 $first =$row['first_name'];
 $last = $row['last_name'];
 $email = $row['email'];
 
 $query = sprintf("SELECT * FROM profiles WHERE uid = $uid");
 //implement session check
 $result = mysql_query($query);
 $row = mysql_fetch_assoc($result);
 $dp = $row['dp'];
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>yellow</title>
<link rel="stylesheet" href="vstyle.css" />
</head>


<body>
	
	<div class="wrapper">
	<h1 class='yellow_title'>yellow!</h1>
 
 
 <div class="holdpic" style="float: left; margin-left: 50px;" >
 <?php if ($dp){ echo "<img src=\"/imageresize/image.php/dp.jpg?width=150&amp;height=150&amp;image=/uploads/profile/dp/".$uid.".jpg&amp;cropratio=1:1\" /><br />"; } ?>
 </div>
 <div class="holdinfo" style="float: left; margin-left: 20px;">
	<?php echo "<h1 class='yellow_name'>".$first." ".$last."</h1>"; ?>
 <?php echo "<h3 class='yellow_loc'>".$row['city'].", ".$row['state']."</h3><h3 class='country' >".$row['country']; ?></h3><br />
 <?php echo $row['sex']; ?><br />
 <?php echo "Born on:".date('d-m-19y', strtotime($row['dob'])); ?><br />
 <?php echo "Email: ".$email."<br />"; ?><br />
 </div>
 <br />
 <div class="clear"></div>
 <?php echo "<a href='logout.php' class='logout' >Logout</a>"; ?>
</div>
</body>
</html>
