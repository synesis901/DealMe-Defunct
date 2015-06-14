<?php
/*
 * THIS IS FOR INTERAL USE ONLY
 */

	include ($_SERVER['DOCUMENT_ROOT']."/php/header.php");
	echo "DealMe";
	include ($_SERVER['DOCUMENT_ROOT']."/php/preload.php");
	echo "<link rel='stylesheet' type='text/css' href='/css/admin.css'>";
	include ($_SERVER['DOCUMENT_ROOT']."/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/php/bodystartadmin.php");
	
?>

<div class="container-fluid">
	<div class="row">
		<!-- sidebar nav -->
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Add Deal <span class="sr-only">(current)</span></a></li>
			</ul>
		</div>
		<!-- main content area business name, address, type of deal, manager/owner, phone, email, product-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			
			<form data-toggle="validator" role="form">
				<p>The following should technically be auto populated</p>
				<div class="well well-sm">
					<div class="form-group">
				    	<label for="email">Business Name</label>
				    	<input type="text" class="form-control" id="inputBName" placeholder="Enter Business Name" data-error="Invalid Name" required>
				  		<div class="help-block with-errors"></div>
				  	</div>
					  	
					<div class="form-group">
				    	<label for="Address">Address</label>
				    	<input type="text" class="form-control" id="inputAddress" placeholder="Enter Address" data-error="Invalid Address" required>
				  		<div class="help-block with-errors"></div>
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="email">Owner's Name</label>
				    	<input type="text" class="form-control" id="inputOName" placeholder="Enter Owner's Name" data-error="Invalid Name" required>
				  		<div class="help-block with-errors"></div>
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="email">Phone</label>
				    	<input type="tel" class="form-control" id="inputPhone" placeholder="Enter Phone" data-error="Invalid Phone" required>
				  		<div class="help-block with-errors"></div>
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="email">E-Mail</label>
				    	<input type="text" class="form-control" id="inputemail" placeholder="Enter E-Mail" data-error="Invalid E-Mail" required>
				  		<div class="help-block with-errors"></div>
				  	</div>
			  	</div>
			  	<div class="form-group" class="col-md-4">
					<label for="dealType">Type of Deal:</label>
			  		<select class="form-control" id="dealType">
			    		<option value="1">Normal Deal</option>
			    		<option value="2">Daily Deal</option>
			  		</select>
			  	</div>
			  	
			  	<div class="form-group">
			    	<label for="email">Product Name</label>
			    	<input type="text" class="form-control" id="inputPName" placeholder="Enter Product Name" data-error="Invalid Name" required>
			  		<div class="help-block with-errors"></div>
			  	</div>
			  	
			  	<div class="form-group">
			    	<label for="exampleInputFile">Product/Deal Image</label>
    				<input type="file" id="exampleInputFile">
			  	</div>
			  	
				<button type="button" id="canceledit" class="btn btn-default">Cancel</button>
				<button type="submit" class="btn btn-default" formmethod="post" formtarget="#">Submit</button>
			</form>
		</div>
	</div>
</div><!-- .content-area -->

</body>