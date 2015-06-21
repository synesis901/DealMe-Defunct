<?php
	include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/header.php");
	echo "DealMe";
	include ($_SERVER['DOCUMENT_ROOT']."/php/preload.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/bodystart.php");
	
	include ($_SERVER['DOCUMENT_ROOT']."/php/businessDisplay.php");
	
	$content = new businessDisplay($_GET);
	
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
					<h1 class="page-header"><?php echo $content->getBinfo()['name']; ?></h1>
					<div class="row">
						<h4>Location: <small><?php echo $content->getBinfo()['full_address']; ?></small></h4>
						<h4>Phone: <small><?php echo $content->getBinfo()['phone']; ?></small></h4>
						<h4>Email: <small><?php echo $content->getBinfo()['email']; ?></small></h4>
						<h4>WebSite: <small><?php echo $content->getBinfo()['url']; ?></small></h4>
						<h4>Twitter: <small><?php echo $content->getBinfo()['twitter']; ?></small></h4>
						<h4>FaceBook: <small><?php echo $content->getBinfo()['facebook']; ?></small></h4>
						<h4>Instagram: <small><?php echo $content->getBinfo()['instagram']; ?></small></h4>
						<p><?php echo $content->getBinfo()['description']; ?></p>
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
				<h1>Deals</h1><!-- see /php/businessDisplay.php::line34 to change HTML -->
				<?php echo $content->getDinfoByBusiness(); ?>
			</div>
			
		</div>
	</div>
</div><!-- .content-area -->


<!--  test -->
<?php 
include($_SERVER['DOCUMENT_ROOT']."/php/footer.php");
?>
