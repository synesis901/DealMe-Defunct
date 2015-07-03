<?php
	include("php/Classes/Main/class.php");
	include ("php/header.php");
	echo "DealMe";
	include ("php/preload.php");
	
	include ("php/Classes/Search/c_search.php");
	echo "<link rel='stylesheet' type='text/css' href='css/frontpage.css'>";
	include ("php/bodystart.php");
	
	//init objects
	include("php/proccessSearchQuery.php");
	$searchFilters = new m_Category();
	
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
			<div class="col-md-12">
				<div class="col-md-5"></div>
				<div class="col-md-2 text-center center">
					<button class="btn btn-default" type="submit" data-toggle="collapse" id="Adv-Search-Area-Button" data-target="#Adv-Search">Search</button>
					<!--For later use
					<form id="search" role="search" class="form-inline">
						<div class="input-group col-md-5 col-sm-8 center">
							<div class="input-group-addon" data-toggle="collapse" id="Adv-Search-Area-Button" data-target="#Adv-Search"><span class="caret"></span></div>
		      				<input type="text" class="form-control" placeholder="Search for...">
		      				<span class="input-group-btn">
		        				<button class="btn btn-default" type="button">Search</button>
		      				</span>
		      				
		   	 			</div> /input-group
		   	 		</form>
		   	 		-->
				</div>
			</div>
		</div>
		<div class="row collapse" id="Adv-Search">
			<form id="Adv-search" role="Adv-search" class="form-inline">
				<div class="col-md-12  com-sm-12">
					<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
						<div class="row">
							<?php echo $searchFilters->getLocations(); ?>
						</div>
						<div class="row"><div class="col-md-6">
							<?php echo $searchFilters->getCategories(); ?>
						</div></div>
						<div class="row">
							<button type="submit" formmethod="post" formaction="" form="Adv-search">Search Now</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div><!-- Front Page Search div -->
	
	<div class="container main-content-bg">
		<div class="row">
		<?php
			echo $searchResultsClass->get_Content();
		?>
		</div>
	</div><!-- main information div -->

</div><!-- .content-area -->


<!--  test -->
<?php 
include("php/footer.php");
?>
