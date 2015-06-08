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
		'<div class="col-sm-4">
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
        				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
      				</div>
      				<div class="modal-body">
						<div class="row">
							<div class="googleMapsModal col-sm-4" id="googleMapsModal"></div>
							<div class="col-sm-1"></div>
							<div class="col-sm-6">
								<p>Business Information Here</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
      							<p><a href="business/businessdeal.php">link to business</a></p>
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