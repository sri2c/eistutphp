<?php

	include_once "connect.php";
	require_once('vcard.php');
	
	$uid = "1";

	$query = sprintf("SELECT * FROM profiles WHERE uid = '$uid'");

	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);

	$first =$row['first_name'];
	$last = $row['last_name'];
	$email = $row['email'];
	$city = $row['city'];
	
	/*
	Instantiate a new vcard object.
	*/
	$vc = new vcard();

	/*
	filename is the name of the .vcf file that will be sent to the user if you
	call the download() method. If you leave this blank, the class will 
	automatically build a filename using the contact's data.
	*/
	$vc->filename = $first."_".$last;

	/*
	If you leave this blank, the current timestamp will be used.
	*/
	#$vc->revision_date = "";

	/*
	Possible values are PUBLIC, PRIVATE, and CONFIDENTIAL. If you leave class
	blank, it will default to PUBLIC.
	*/
	#$vc->class = "PUBLIC";

	/*
	Contact's name data.
	If you leave display_name blank, it will be built using the first and last name.
	*/
	#$vc->data['display_name'] = "";
	$vc->data['first_name'] = $first;
	$vc->data['last_name'] = $last;
	#$vc->data['additional_name'] = ""; //Middle name
	#$vc->data['name_prefix'] = "";  //Mr. Mrs. Dr.
	#$vc->data['name_suffix'] = ""; //DDS, MD, III, other designations.
	$vc->data['nickname'] = $first;

	/*
	Contact's company, department, title, profession
	*/
	//$vc->data['company'] = "TroyWolf.com";
	#$vc->data['department'] = "";
	//$vc->data['title'] = "Web Developer";
	#$vc->data['role'] = "";

	/*
	Contact's work address
	*/
	#$vc->data['work_po_box'] = "";
	#$vc->data['work_extended_address'] = "";
	$vc->data['work_address'] = "7027 N. Hickory";
	$vc->data['work_city'] = "Kansas City";
	$vc->data['work_state'] = "MO";
	$vc->data['work_postal_code'] = "64118";
	#$vc->data['work_country'] = "United States of America";

	/*
	Contact's home address
	*/
	#$vc->data['home_po_box'] = "";
	#$vc->data['home_extended_address'] = "";
	$vc->data['home_address'] = "7027 N. Hickory";
	$vc->data['home_city'] = $city;
	$vc->data['home_state'] = "MO";
	$vc->data['home_postal_code'] = "64118";
	#$vc->data['home_country'] = "United States of America";

	/*
	Contact's telephone numbers.
	*/
	$vc->data['office_tel'] = "";
	#$vc->data['home_tel'] = "";
	$vc->data['cell_tel'] = "(816) 739-9653";
	$vc->data['fax_tel'] = "";
	#$vc->data['pager_tel'] = "";

	/*
	Contact's email addresses
	*/
	$vc->data['email1'] = "troy@troywolf.com";
	#$vc->data['email2'] = "";

	/*
	Contact's website
	*/
	$vc->data['url'] = "http://www.troywolf.com";

	/*
	Some other contact data.
	*/
	#$vc->data['photo'] = "";  //Enter a URL.
	$vc->data['birthday'] = "1971-08-13";
	$vc->data['timezone'] = "-06:00";

	/*
	If you leave this blank, the class will default to using last_name or company.
	*/
	#$vc->data['sort_string'] = "";

	/*
	Notes about this contact.
	*/
	#$vc->data['note'] = "Troy is an amazing guy!";

	/*
	Generate card and send as a .vcf file to user's browser for download.
	*/
	$vc->download();


?>