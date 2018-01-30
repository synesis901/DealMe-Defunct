<?php
/*
	Processes search results
*/

$searchResultsClass = new SearchResults();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$location = isset($_POST['location'])?$_POST['location']:"";
	$category = isset($_POST['category'])?$_POST['category']:"";
	$searchResultsClass->smallSearchResult($location,$category);
}else{
	$searchResultsClass->smallSearchResult();//default fills in class
}
?>