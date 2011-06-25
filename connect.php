<?php

	$conn = mysql_connect("localhost", "tsn", "");
	if (!$conn) die("Could not connect!");

	mysql_select_db("tsn", $conn);



?>
