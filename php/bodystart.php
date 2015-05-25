</head>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="#">DealMe</a>
    	</div>
		
		<div id="navbar" class="navbar-collapse collapse">
		
			<!-- Left hand side nav -->
			<ul class="nav navbar-nav">
				<form class="navbar-form navbar-left" role="search">
  					 <div class="input-group">
      					<input type="text" class="form-control" placeholder="Search for...">
      					<span class="input-group-btn">
        					<button class="btn btn-default" type="button">Search</button>
      					</span>
   	 				</div><!-- /input-group -->
				</form>
			</ul>
			
			<!-- Right hand side nav -->
			<ul class="nav navbar-nav navbar-right">
				<!-- add php logic here -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User Account<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
						<li><a href="#">Menu 3</a></li>
						<li><a href="#">Menu 4</a></li>
					</ul>
				</li>
				<button type="button" class="btn btn-default navbar-btn">Sign Out</button>
				<button type="button" class="btn btn-default navbar-btn">Add Business</button>
			</ul>
		
		</div><!--/.nav-collapse -->

	</div>

</nav>
<body>