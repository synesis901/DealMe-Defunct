<?php

	include ("php/header.php");
	echo "DealMe";
	include ("php/preload.php");
	include ("php/Classes/Search/c_search.php");
	echo "<link rel='stylesheet' type='text/css' href='css/frontpage.css'>";
	include ("php/bodystart.php");
	
	//init objects
	$searchResultsClass = new SearchResults();
	
?>

<!-- Main jumbotron for featuring items -->
<div class="jumbotron jumbotron-mainpage">
    <div class="container">
		<h1>MAIN HEADLINE</h1>
		<p>Add Information Here</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
	</div>
</div>

<div class="content-area-mainpage">
	<div class="Search-Area" id="Search-Area">
		<div class="row top-content">
			<div class="col-sm-12">
				<div class="col-sm-4"></div>
				<form id="search" role="search" class="form-inline">
	  				 <div class="input-group col-sm-5 center">
	  				 	<div class="input-group-addon" data-toggle="collapse" id="Adv-Search-Area-Button" data-target="#Adv-Search"><span class="caret"></span></div>
	      				<input type="text" class="form-control" placeholder="Search for...">
	      				<span class="input-group-btn">
	        				<button class="btn btn-default" type="button">Search</button>
	      				</span>
	      				
	   	 			</div><!-- /input-group -->
	   	 		</form>
			</div>
		</div>
		<div class="row collapse" id="Adv-Search">
			<form id="Adv-search" role="Adv-search" class="form-inline">
				<div class="col-sm-12">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 checkbox" id="Adv-Search-Div-1">
								<label>
									<input type="checkbox" id="Adv-Search-Chkbox-1"> Check me out
								</label>
							</div>
							<div class="col-sm-4 checkbox" id="Adv-Search-Div-2">
								<label>
									<input type="checkbox" id="Adv-Search-Chkbox-2"> Check me out
								</label>
							</div>
							<div class="col-sm-4 checkbox" id="Adv-Search-Div-3">
								<label>
									<input type="checkbox" id="Adv-Search-Chkbox-3"> Check me out
								</label>
							</div>
						</div> <!-- top row -->
						
						<div class="row">
							<div class="col-sm-4 checkbox" id="Adv-Search-Div-4">
								<label>
									<input type="checkbox" id="Adv-Search-Chkbox-4"> Check me out
								</label>
							</div>
							<div class="col-sm-4 checkbox" id="Adv-Search-Div-5">
								<label>
									<input type="checkbox" id="Adv-Search-Chkbox-5"> Check me out
								</label>
							</div>
							<div class="col-sm-4 checkbox" id="Adv-Search-Div-6">
								<label>
									<input type="checkbox" id="Adv-Search-Chkbox-6"> Check me out
								</label>
							</div>
						</div><!-- bottom row -->
					</div>
				</div>
			</form>
		</div>
	</div><!-- Front Page Search div -->
	
	<div class="container main-content-bg">
		<div class="row">
		<?php 
			$searchResultsClass->initSearchResult(1,1);
			$searchResultsClass->initSearchResult(1,1);
			$searchResultsClass->initSearchResult(1,1);
		?>
		</div>
	</div><!-- main information div -->

</div><!-- .content-area -->


<!--  test -->
<?php 
include("php/footer.php");
?>
