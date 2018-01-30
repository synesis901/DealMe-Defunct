<?php
/*
	DealMe Login
	On Success:
	
	
	On failure:
	returns info to repopulate the HTML fields and provides error
*/

include("Classes/Main/class.php");

// Everything is preset. I will make changes based on how the info gets here from the signup form
$email = isset($_POST['email'])? $_POST['email'] : "";
$pass = isset($_POST['password'])?$_POST['password'] : "";
$t = m_Login::login($email,$pass);

$redirect = (m_Login::check() == "true")?"Location: /admin/dashboard.php":"Location: /?email=".$email."&l=".$t;
Header($redirect);
?>