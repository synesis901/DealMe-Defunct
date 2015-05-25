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
		<a href="#" data-toggle="modal" data-target="#searchModal"><img src="/DealMeMVP/images/test/squaretest.jpg" class="img-responsive img-thumbnail" alt="test image"></a>
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
      					<p>Content Here</p>
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
<!--
search object
<div class="col-sm-4">
		<a href="#" data-toggle="modal" data-target="#searchModal"><img src="/DealMeMVP/images/test/squaretest.jpg" class="img-responsive img-thumbnail" alt="test image"></a>
</div>

 Modal 
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      	<p>Content Here</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
-->