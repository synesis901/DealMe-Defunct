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

	<div class="frontpage-search">
		<div class="col-sm-12">
			<form id="search" role="search">
  				 <div class="input-group col-sm-4 center">
      				<input type="text" class="form-control" placeholder="Search for...">
      				<span class="input-group-btn">
        				<button class="btn btn-default" type="button">Search</button>
      				</span>
   	 			</div><!-- /input-group -->
			</form>
		</div>
	</div><!-- Front Page Search div -->
	
	<div class="container">
		<div class="row">
		<?php 
			$searchResultsClass->initSearchResult(1,1);
			$searchResultsClass->initSearchResult(1,1);
			$searchResultsClass->initSearchResult(1,1);
		?>
		</div>
	</div><!-- main information div -->

</div><!-- .content-area -->



<?php 
include("php/footer.php");
?>
