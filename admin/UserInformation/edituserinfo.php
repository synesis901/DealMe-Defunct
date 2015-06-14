<?php 
	//get user info here
?>
	
	<h1 class="page-header">Profile Info</h1>
	<form data-toggle="validator" role="form">
		<div class="form-group">
	    	<label for="email">Email address</label>
	    	<input type="email" class="form-control" id="inputemail" placeholder="Enter Email" data-error="Invalid E-mail" required>
	  		<div class="help-block with-errors"></div>
	  	</div>
	  	
	  	<div class="form-group">
	    	<label for="password">Password</label>
	    	<input type="password" class="form-control" id="inputPassword" placeholder="Enter Password" required>
	  		<div class="help-block with-errors"></div>
	  	</div>
	  	
	  	<div class="form-group">
	    	<label for="password">Confirm PasswordPassword</label>
	    	<input type="password" class="form-control" id="passwordConfirm" data-match="#inputPassword" data-match-error="Password does not match" placeholder="Enter Password" required>
	  		<div class="help-block with-errors"></div>
	  	</div>
	  	
		<button type="button" id="canceledit" class="btn btn-default">Cancel</button>
		<button type="submit" class="btn btn-default" formmethod="post" formtarget="#">Submit</button>
	</form>