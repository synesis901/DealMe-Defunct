<?php
/*
	shows business profiles from db
	security issue with _GET being stored directly to var
	need to add date filters and active filters too
*/

class businessDisplay{
	private $ids = array();
	private $businessInfo;
	private $dealInfoByGet;
	private $dealInfoByBusiness = "<p>No Deals Currently</p>";// default display
	
	public function __construct($get){
		$this->storeGET($get);
		
		$this->bQuery();
		$this->dQueryByBusiness();
		$this->dQueryByGet();
	}
	
	private function storeGET($info){
		$this->ids['b'] = isset($info['b'])?new MongoID($info['b']):"";//business MongoID
		$this->ids['d'] = isset($info['d'])?new MongoID($info['d']):"";//deal MongoID
	}
	
	private function bQuery(){
		$this->businessInfo = m_FindOne::result(m_var::get_database(),m_var::get_businessAccount(),array("_id"=>$this->ids['b']));
	}
	
	private function dQueryByBusiness(){
		//lists all deals by current business ID
		m_Find::result(m_var::get_database(),m_var::get_businessAds(),array("business_id"=>$this->ids['b']));
		$result = m_Find::get_results();
		
		/*
			---- HTML Bootstrap Content Here ----
		*/
		if($result){
			$HTML="";
			foreach($result as $doc){
				if($doc['active'] == "true"){
					$HTML .= 
					'<h4><a href="businessdeal.php?d='.$doc['_id'].'">'.$doc['name'].'</a></h4>
					<p>'.$doc['description'].'</p>';
				}
			}
			$this->dealInfoByBusiness = $HTML;
		}
	}
	
	private function dQueryByGet(){
		$this->dealInfoByGet = m_FindOne::result(m_var::get_database(),m_var::get_businessAds(),array("_id"=>$this->ids['d']));
	}
	
	public function getBinfo(){
		return $this->businessInfo;
	}
	
	public function getDinfo(){
		return $this->dealInfoByGet;
	}
	
	public function getDinfoByBusiness(){
		return $this->dealInfoByBusiness;
	}
}

?>