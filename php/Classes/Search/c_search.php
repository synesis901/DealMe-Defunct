<?php

class SearchResults
{
	
	function initSearchResult($locationID, $resultSize)
	{	
		switch ($resultSize)
		{
			case 1:
				$this->smallSearchResult($locationID);
				break;
			case 2:
				mediumSearchResult($locationID);
				break;
			case 3:
				largeSearchResult($locationID);
				break;
		}
		
		return $resultSize;
	}
	
	function smallSearchResult($locationID)
	{
		//populate search object
		echo
		'<div class="col-md-4 col-sm-4">
		<a href="#" data-toggle="modal" data-target="#searchModal"><img src="images/test/squaretest.jpg" class="img-responsive img-thumbnail" alt="test image"></a>
		</div>';
		
		$this->createModal($locationID);
	}
	
	function mediumSearchResult($locationID)
	{
		//populate search object
	}
	
	function largeSearchResult($locationID)
	{
		//populate search object
	}
	
	function createModal($locationID)
	{
		
		//do sql function here
		
		echo 
		'<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel">RuralTech Computers, Inc.</h4>
      				</div>
      				<div class="modal-body">
						<div class="row">
							<div class="googleMapsModal col-sm-4" id="googleMapsModal"></div>
							<div class="col-sm-1"></div>
							<div class="col-sm-6">
								<h4>Location: <small>32 23rd Street, Battleford SK</small></h4>
								<h4>Phone: <small>123 123-4567</small></h4>
								<h4>Email: <small>email@email.com</small></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-11">
      							<p class="text-right"><a href="business/businessdeal.php">Business Page Link</a></p>
							</div>
      					</div>
					</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>';
	}
}
?>