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
				<div class="col-sm-5">
					<h1>Business Name</h1>
					<p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fermentum nisi eu est tincidunt, id tempus nulla elementum. Pellentesque sed nulla velit. In at massa turpis. Nam tincidunt vulputate eros pretium gravida. Curabitur sit amet sapien urna. Nam scelerisque lobortis diam, et vehicula tortor volutpat sit amet. Aenean ligula diam, condimentum at sem id, euismod pretium magna. Suspendisse ultrices placerat sapien, eu volutpat ex aliquet sed. Nam rutrum odio ut ligula aliquam convallis. Nunc eget diam augue. Nunc ut vehicula lorem.

Nullam tincidunt bibendum sollicitudin. Suspendisse consectetur venenatis arcu, eget dignissim turpis interdum non. Proin tristique velit libero, eget lobortis arcu lobortis ut. In hac habitasse platea dictumst. Fusce sem neque, condimentum id vulputate sit amet, sagittis eget elit. In libero libero, efficitur in arcu tempus, rutrum cursus purus. Praesent magna nunc, aliquet egestas sem sed, ultricies molestie felis. Mauris iaculis elit elit, sit amet egestas ipsum pharetra bibendum. Cras vitae vehicula nisi, non tincidunt nunc. Phasellus sollicitudin tempor mattis. Cras ipsum metus, elementum at nulla quis, sollicitudin placerat leo.

Quisque ut dignissim lorem, vitae aliquam arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, velit id blandit egestas, orci leo tempor metus, id dignissim nunc quam pretium. </p>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-6 bg-info googleMapsCanvas" id="googleMapsCanvas"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1>Deals Go Here</h1>
			</div>
			
		</div>
	</div>
</div><!-- .content-area -->


<!--  test -->
<?php 
include($_SERVER['DOCUMENT_ROOT']."/php/footer.php");
?>
