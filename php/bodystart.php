</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="/DealMeMVP/default.php">DealMe</a>
    	</div>
		
		<div id="navbar" class="navbar-collapse collapse">
			
			<!-- Left hand side nav -->
			<form class="navbar-form navbar-left" id="search" role="search">
  				<div class="input-group">
      				<input type="text" class="form-control" placeholder="Search for...">
      				<span class="input-group-btn">
        				<button class="btn btn-default" type="button">Search</button>
      				</span>
   	 			</div><!-- /input-group -->
			</form>
			
			
			<!-- Right hand side nav -->
			<ul class="nav navbar-nav navbar-right">
				<!-- add php logic here -->
				<li>
					<a href="#" data-toggle="modal" data-target="#signup-Modal">Sign Up</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User Account<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/DealMeMVP/admin/profileadmin.php">Profile</a></li>
						<li><a href="/DealMeMVP/admin/businessadmin.php">Dashboard</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</li>
			</ul>
		
		</div><!--/.nav-collapse -->

	</div>

</nav>

<!-- Modal Stuff for nav -->

<div class="modal fade" id="signup-Modal" tabindex="-1" role="dialog" aria-labelledby="signup-Modal" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
		    </div>
		<div class="modal-body">
	      	<form data-toggle="validator" role="form">
				<div class="form-group">
			    	<label for="display-name">Display Name</label>
			    	<input type="text" class="form-control" id="display-name" placeholder="Enter Display Name" required>
			    	<div class="help-block with-errors"></div>
			  	</div>
			  	
				<div class="form-group">
			    	<label for="email">Email address</label>
			    	<input type="email" class="form-control" id="inputemail" placeholder="Enter Email" data-error="Invalid E-mail" required>
			  		<div class="help-block with-errors"></div>
			  	</div>
			  	
			  	<div class="form-group">
			    	<label for="location">Town/City</label>
			    	<input type="text" name="location" class="form-control" id="inputlocation" placeholder="Where do you hail?" required>
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
				
				
				<input type="hidden" name="switch" value="registration">
				<button type="submit" form="form" formaction="php/register.php" formmethod="post" class="btn btn-default">Submit</button>
			</form>
		</div>
  		</div>
	</div>
</div>