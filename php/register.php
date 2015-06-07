<?php
/*
	DealMe Ajax Registration
*/

include("Classes/Main/class.php");

// Everything is preset. I will make changes based on how the info gets here from the signup form
$UA = array();
$UA['Password'] = isset($_POST['pass'])?$_POST['pass'] : "";
$UA['Password2'] = isset($_POST['pass2'])?$_POST['pass2'] : "";
$UA['Name'] = isset($_POST['name'])? $_POST['name']: "";
$UA['Email'] = isset($_POST['email'])? $_POST['email'] : "";
$UA['Email2'] = isset($_POST['email2'])? $_POST['email2']: "";
$UA['Location'] = isset($_POST['location'])? $_POST['location']: "";

$UAT = new m_UserAccount();
$UAT->newuser($UA);
$UAT->save();
echo $UAT->get_error();
?>