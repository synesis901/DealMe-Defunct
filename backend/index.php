<?php
	include($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/header.php");
	echo "DealMe";
	include ($_SERVER['DOCUMENT_ROOT']."/php/preload.php");
	
	include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/bodystart.php");

?>

<div class="content-area-mainpage">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<form id="backend" class="form-inline">
				<div class="row">
					these are the input names I'm looking for in this form<br/>
					name, full_address, city, province, description, modal_desc, url, twitter, facebook, instagram, phone, email
				</div>
				<div class="row">
					<button type="submit" formmethod="post" formaction="<?php echo "/php/backend.php";?>" form="backend">Search Now</button>
				</div>
			</form>
		</div>
	</div>
</div><!-- .content-area -->

<?php 
include($_SERVER['DOCUMENT_ROOT']."/php/footer.php");
?>
