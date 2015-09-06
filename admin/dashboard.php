<?php
	include($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");
	include($_SERVER['DOCUMENT_ROOT']."/php/loginCheck.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/header.php");
	echo "Findr";
	include ($_SERVER['DOCUMENT_ROOT']."/php/preload.php");
	echo "<link rel='stylesheet' type='text/css' href='/css/admin.css'>";
	echo "<script src='admin.js'></script>";
	echo "<script src='profileadmin.js'></script>";
	//include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/bodystartadmin.php");
?>

<div class="container-fluid">
	<div class="row">
		<!-- sidebar nav -->
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Profile Demographics<span class="sr-only">(current)</span></a></li>
			</ul>
		</div>
		<!-- main content area -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="row">
				<div class="col-sm-5">
					
					<div id="profileInfo"></div>
				</div>
			</div>
		</div>
	</div><!-- .content-area -->
</div>
<!--  test -->
</body>
