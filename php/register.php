<?php
/*
	DealMe Ajax Registration
*/

include("Classes/Main/class.php");

// Everything is preset. I will make changes based on how the info gets here from the signup form
$UA = array();
$UA['Username'] = isset($_POST['username'])?$_POST['username'] : "";
$UA['Password'] = isset($_POST['password'])?$_POST['password'] : "";
$UA['Password2'] = isset($_POST['password2'])?$_POST['password2'] : "";
$UA['Name'] = isset($_POST['name'])? $_POST['name']: "";
$UA['Email'] = isset($_POST['email'])? $_POST['email'] : "";
$UA['Email2'] = isset($_POST['email2'])? $_POST['email2']: "";

$UAT = new m_UserAccount();
$UAT->newuser($UA);
$UAT->save();
echo $UAT->get_error();
?>