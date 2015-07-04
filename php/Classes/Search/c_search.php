<?php
// class.php should already be called
class SearchResults
{
	private $HTMLcontent = "";
	private $searchResults = array();
	
	
	public function get_Content()
	{	
		return $this->HTMLcontent;
	}
	
	public function smallSearchResult($locationID="North Battleford",$category="all")
	{
		//populate search object
		$hold = array("city"=>$locationID);
		m_Find::result(m_var::get_database(),m_var::get_businessAccount(),$hold);
		if($category != "all"){
			$this->categoryFilter(m_Find::get_results(),$category);
		}else{
			$this->searchResults = m_Find::get_results();
		}
		
		$this->createContent($locationID);
	}
	
	function mediumSearchResult()
	{
		//populate search object
	}
	
	function largeSearchResult($locationID)
	{
		//populate search object
	}
	
	private function createContent()
	{
		
		//do sql function here
		$hold = 0;
		foreach($this->searchResults as $doc){
		
		$this->HTMLcontent .=
		'<div class="col-md-4 col-sm-4 dm_drop-container">
			<a href="#" data-toggle="modal" data-target="#searchModal'.$hold.'">
				<img src="images/test/squaretest.jpg" class="img-responsive img-thumbnail" alt="test image" style="float: left;">
			</a>
			<div class="collapse well dm_drop-content">'.$doc['description'].'</div>
		</div>
		
		<div class="modal fade" id="searchModal'.$hold.'" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel">'.$doc['name'].'</h4>
      				</div>
      				<div class="modal-body">
						<div class="row">
							<div class="googleMapsModal col-sm-4" id="googleMapsModal"></div>
							<div class="col-sm-1"></div>
							<div class="col-sm-6">
								<h4>Location: <small>'.$doc['full_address'].'</small></h4>
								<h4>Phone: <small>'.$doc['phone'].'</small></h4>
								<h4>Email: <small>'.$doc['email'].'</small></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-11">
      							<p class="text-right"><a href="business/businessdeal.php?c='.$doc['_id'].'">Business Page Link</a></p>
							</div>
      					</div>
					</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      				</div>
    			</div>
  			</div>
		</div>';
		$hold++;
		}
	}
	
	private function categoryFilter($r,$cat){
		$hold = array();
		
		/*
			hell of a filter... needs to be more efficient
			loops through all the selected check boxes and all the docs and stores in an
			array the docs that match
		*/
		foreach($cat as $c){
			foreach($r as $doc){
				foreach($doc['tags'] as $tags){
					if($tags == $c){
						array_push($hold,$doc);
					}
				}
			}
		}
		$this->searchResults = $hold;
	}
}
?>