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
	</div>
	<div class="container main-content-bg">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h1 class="page-header">Sign Up</h1>
				
				<form>
					<div class="form-group">
				    	<label for="display-name">Display Name</label>
				    	<input type="text" class="form-control" id="display-name" placeholder="Enter Display Name">
				  	</div>
				  	
					<div class="form-group">
				    	<label for="username">Username</label>
				    	<input type="text" class="form-control" id="username" placeholder="Enter Username">
				  	</div>
				  	
					<div class="form-group">
				    	<label for="email">Email address</label>
				    	<input type="email" class="form-control" id="email" placeholder="Enter Email">
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="email">Confirm Email address</label>
				    	<input type="email" class="form-control" id="email" placeholder="Confirm Email">
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="password">Password</label>
				    	<input type="password" class="form-control" id="password" placeholder="Enter Password">
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="password">Confirm PasswordPassword</label>
				    	<input type="password" class="form-control" id="password" placeholder="Confirm Password">
				  	</div>
					
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<?php 
					//display name, username, email, and password
				?>
			</div>
		</div>
	</div>
</div><!-- .content-area -->


<!--  test -->
<?php 
include($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/footer.php");
?>
