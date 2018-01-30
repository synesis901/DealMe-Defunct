<?php
	include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/header.php");
	echo "Findr";
	include ($_SERVER['DOCUMENT_ROOT']."/php/preload.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/bodystart.php");
	
	include ($_SERVER['DOCUMENT_ROOT']."/php/businessDisplay.php");
	
	$content = new businessDisplay($_GET);
	
?>
<script type="text/javascript">
var lat1 = <?php echo $content->getBinfo()['location']['lat'] ?>;
var lng1 = <?php echo $content->getBinfo()['location']['lng'] ?>;
</script>
	<script src="/js/mapsloader.js"></script>
<div class="content-area">
	<div class="top-content row">
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-3"><img src="/images/business/<?php echo $content->getBinfo()['_id']; ?>-lg.jpg" class="img-thumbnail img-modal-md" alt="<?php echo $content->getBinfo()['_id']; ?> Logo"/></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-5">
					<h1 class="page-header"><?php echo $content->getBinfo()['name']; ?></h1>
					<div class="row">
						<h4><small>Location: </small><?php echo $content->getBinfo()['full_address']; ?></h4>
						<h4><small>Phone: </small><?php echo $content->getBinfo()['phone']; ?></h4>
						<h4><small>Email: </small><?php echo $content->getBinfo()['email']; ?></h4>
						<h4><small>WebSite: </small><?php echo $content->getBinfo()['url']; ?></h4>
						<h4><small>Twitter: </small><?php echo $content->getBinfo()['twitter']; ?></h4>
						<h4><small>FaceBook: </small><?php echo $content->getBinfo()['facebook']; ?></h4>
						<h4><small>Instagram: </small><?php echo $content->getBinfo()['instagram']; ?></h4>
						<p class="lead"><?php echo $content->getBinfo()['description']; ?></p>
					</div>
				</div>
				<div class="col-md-offset-1 col-md-6 bg-info googleMapsCanvas" id="googleMapsCanvas"></div>
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
