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
      		<a class="navbar-brand" href="/"><img class="brand-img" alt="Brand" src="/images/logo.png" /></a>
    	</div>
		
		<div id="navbar" class="navbar-collapse collapse">
			
			<!-- Left hand side nav -->
			
			
			<!-- Right hand side nav -->
			<ul class="nav navbar-nav navbar-right">
				<!-- add php logic here -->
				<?php
					if(m_Login::check() == "false"){
				?>
				<li>
					<a href="#" data-toggle="modal" data-target="#signup-Modal">Register</a>
				</li>
				<li>
					<a href="#" data-toggle="modal" data-target="#login-Modal">Log In</a>
				</li>
				<?php }else{ //if logged in ?>
				<li>
					<a href="/admin/dashboard.php">Dashboard</a>
				</li>
				<li>
					<a href="/php/logout.php">Log Out</a>
				</li>
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Display Name<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/admin/profileadmin.php">Profile</a></li>
						<li><a href="/admin/businessadmin.php">Dashboard</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</li> -->
				<?php } ?>
			</ul>
		
		</div><!--/.nav-collapse -->

	</div>

</nav>

<!-- Modal Stuff for nav -->
<!-- Registration Modal -->
<div class="modal fade" id="signup-Modal" tabindex="-1" role="dialog" aria-labelledby="signup-Modal" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Register</h4> <p class="text-warning"><?php echo isset($_GET['e'])?$_GET['e']:""; ?></p>
		    </div>
			<div class="modal-body">
				<form data-toggle="validator" role="form" id="form">
					<div class="form-group">
						<label for="display-name">Display Name</label>
						<input type="text" class="form-control" id="display-name" name="name" placeholder="Ex: John Doe, sexycat67..." required value="<?php echo isset($_GET['name'])?$_GET['name']:""; ?>">
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="inputemail" name="email" placeholder="johndoe@email.com" data-error="Invalid E-mail" required value="<?php echo isset($_GET['email'])?$_GET['email']:""; ?>">
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="location">Town/City</label>
						<input type="text" name="location" class="form-control" id="inputlocation" placeholder="North Battleford" required value="<?php echo isset($_GET['loc'])?$_GET['loc']:""; ?>">
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control"  name="pass" id="inputPassword" placeholder="Enter Password" required>
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="password">Confirm Password</label>
						<input type="password" class="form-control" name="pass2" id="passwordConfirm" data-match="#inputPassword" data-match-error="Password does not match" placeholder="Enter Password" required>
						<div class="help-block with-errors"></div>
					</div>
					
					
					<input type="hidden" name="switch" value="index.php">
					<button type="submit" form="form" formaction="/php/register.php" formmethod="post" class="btn btn-default">Submit</button>
				</form>
			</div>
  		</div>
	</div>
</div>

<!-- Successful Registration Modal -->
<div class="modal fade" id="succ-Modal" tabindex="-1" role="dialog" aria-labelledby="succ-Modal" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Thank You!</h4>
		    </div>
			<div class="modal-body">
				Thank You for your Registration! Check your Email to Validate your Account!
			</div>
  		</div>
	</div>
</div>

<!-- Log In Modal -->
<div class="modal fade" id="login-Modal" tabindex="-1" role="dialog" aria-labelledby="login-Modal" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Sign In</h4><p class="text-warning"><?php echo isset($_GET['l'])?$_GET['l']:""; ?></p>
		    </div>
			<div class="modal-body">
				<form data-toggle="validator" role="form" id="login">
					<div class="form-group">
						<label for="display-name">User Name</label>
						<input type="email" class="form-control" id="inputemail" name="email" placeholder="imcray@yes.iam" data-error="Invalid E-mail" required value="<?php echo isset($_GET['email'])?$_GET['email']:""; ?>">
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="email">Password</label>
						<input type="password" class="form-control" id="inputpassword" name="password" placeholder="******" required>
						<div class="help-block with-errors"></div>
					</div>
					
					<button type="submit" form="login" formaction="/php/login.php" formmethod="post" class="btn btn-default">Submit</button>
				</form>
			</div>
  		</div>
	</div>
</div>