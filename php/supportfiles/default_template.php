<?php
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/header.php");
	echo "DealMe";
	echo ($_SERVER['DOCUMENT_ROOT']);
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/preload.php");
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/bodystart.php");
	
?>

<!-- Main jumbotron for featuring items -->
<div class="jumbotron jumbotron-mainpage">
    <div class="container">
		<h1>MAIN HEADLINE</h1>
		<p>Add Information Here</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
	</div>
</div>

<div class="content-area">
	<div class="top-content row">
		<div class="col-sm-12">
			<div class="col-sm-5"></div>
			<div class="col-sm-2 text-center center">
				<button class="btn btn-default" type="button">Top Content Button</button>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Main Content Area</h1>
			</div>
		</div>
	</div>
</div><!-- .content-area -->


<!--  test -->
<?php 
include($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/footer.php");
?>
