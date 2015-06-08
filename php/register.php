<?php
/*
	DealMe Registration
	On Success:
	Takes registration data, validates and enters into database. Sends email to
	registered email and returns a $_GET to the page it came from
	
	On failure:
	returns info to repopulate the HTML fields and provides error
*/

include("Classes/Main/class.php");

// Everything is preset. I will make changes based on how the info gets here from the signup form
$UA = array();
$UA['Password'] = isset($_POST['pass'])?$_POST['pass'] : "";
$UA['Password2'] = isset($_POST['pass2'])?$_POST['pass2'] : "";
$UA['Name'] = isset($_POST['name'])? $_POST['name']: "";
$UA['Email'] = isset($_POST['email'])? $_POST['email'] : "";
//$UA['Email2'] = isset($_POST['email2'])? $_POST['email2']: "";
$UA['Location'] = isset($_POST['location'])? $_POST['location']: "";

$UAT = new m_UserAccount();
$UAT->newuser($UA);
$UAT->save();
$redirect = (empty($UAT->get_error()))?"Location: ../".$_POST['switch']."?c=1":"Location: ../".$_POST['switch']."?name=".$UA['Name']."&email=".$UA['Email']."&loc=".$UA['Location']."&e=".$UAT->get_error();
Header($redirect);
?>