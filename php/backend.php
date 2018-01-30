<?php
/*
	DealMe stuff
	
	create object
	update to data base
*/
include($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");

$info = array(
	"_id" => new MongoID(),
	"name" => isset($_POST['name'])?$_POST['name'] : "",
	"full_address" => isset($_POST['full_address'])?$_POST['full_address'] : "",
	"city" => isset($_POST['city'])?$_POST['city'] : "",
	"province" => isset($_POST['province'])?$_POST['province'] : "",
	"description" => isset($_POST['description'])?$_POST['description'] : "",
	"modal_desc" => isset($_POST['modal_desc'])?$_POST['modal_desc'] : "",
	"creation_date" => getdate(),
	"instagram" => isset($_POST['instagram'])?$_POST['instagram'] : "",
	"url" => isset($_POST['url'])?$_POST['url'] : "",
	"facebook" => isset($_POST['facebook'])?$_POST['facebook'] : "",
	"twitter" => isset($_POST['twitter'])?$_POST['twitter'] : "",
	"phone" => isset($_POST['phone'])?$_POST['phone'] : "",
	"email" => isset($_POST['email'])?$_POST['email'] : "",
	"location" => isset($_POST['location'])?$_POST['location'] : "",
	"lastupdated" => getdate(),
	"tags" => array()
);

m_Save::result(m_var::get_database(),m_var::get_businessAccount(),$info);
Header("Location: /backend");

?>