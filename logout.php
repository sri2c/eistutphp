<?php

 //Simply logs the user out and takes them back to the index page.
 session_start();
 
 session_unset();
 
 session_destroy();
 
 header( 'Location: index.php');
?>
