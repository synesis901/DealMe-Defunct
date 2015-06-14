<?php
	include ($_SERVER['DOCUMENT_ROOT']."/php/header.php");
	echo "DealMe";
	include ($_SERVER['DOCUMENT_ROOT']."/php/preload.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/bodystart.php");
	
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
		<div class="col-md-12">
			<div class="col-md-5"></div>
			<div class="col-md-2 text-center center">
				<button class="btn btn-default" type="button">Top Content Button</button>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-5">
					<h1 class="page-header">RuralTech Computers, Inc.</h1>
					<div class="row">
						<h4>Location: <small>32 23rd Street, Battleford SK</small></h4>
						<h4>Phone: <small>123 123-4567</small></h4>
						<h4>Email: <small>email@email.com</small></h4>
						<p>Get two hours of hardware work done, get a free virus removal!</p>
					</div>
					<div class="row">
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 bg-info googleMapsCanvas" id="googleMapsCanvas"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1>Deals</h1>
				<p>No Current Deals</p>
			</div>
			
		</div>
	</div>
</div><!-- .content-area -->


<!--  test -->
<?php 
include($_SERVER['DOCUMENT_ROOT']."/php/footer.php");
?>
