<?php //get user info here 
include($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");

$UAT = new m_UserAccount($_SESSION['login']);
?>
	
	<h1 class="page-header">Profile Info</h1> $_GET['e'] doesn't work<small><?php echo (isset($_GET['e']))?"Passwords Don't Match":""; 
	echo (isset($_GET['d']))?$_GET['d']:""; ?></small>
	
	<div class="row">
		<h3 class="col-sm-4"><small>Login Info</small></h3>
		<h3 class="col-sm-8"><?php echo $UAT->get_properties()['_id']; ?></h3>
	</div>
	<div class="row">
		<h3 class="col-sm-4"><small>Display Name</small></h3>
		<h3 class="col-sm-8"><?php echo $UAT->get_properties()['name']; ?></h3>
	</div>
	<div class="row">
		<h3 class="col-sm-4"><small>Password</small></h3>
		<h3 class="col-sm-8">***********</h3>
	</div>
	
	<button class="btn btn-default" id="edituserinfo">Edit</button>
