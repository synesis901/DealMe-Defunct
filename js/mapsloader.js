/**
 * Maps Loader for test 
 */
var mapObject;

/*
 * INIT MAPS - DEFAULT IS CURRENT LOCATION
 * function (div object)
 * */
function initMapCurrentLocation(object){
	object.gmap({'disableDefaultUI' : 'true'}).bind('init', function(evt, map) {
		var defaultPosition = new google.maps.LatLng(53.5333, -113.50000);
		
		//add options
		object.gmap('option', 'center', defaultPosition);
		object.gmap('option', 'zoom', 15);
		
		object.gmap('getCurrentPosition', function(position, status) {
			if ( status === 'OK' ) {
				
				var clientPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
				//add options
				object.gmap('option', 'center', clientPosition);
			}
		
		});
		
		mapObject = map;
	});	
	
	return this;
}

/*
 * INIT MAPS WITH JSON OBJECT
 * function (json data from database, div object)
 * */
function initMarkersToMapsJSON(jsonData, object){

	object.gmap({'disableDefaultUI' : 'true'}).bind('init', function(evt, map) { 
		
		$.each( jsonData.markers, function(i, marker) {
			object.gmap('addMarker', { 
				'position': new google.maps.LatLng(marker.latitude, marker.longitude), 
				'bounds': true 
			}).click(function() {
				object.gmap('openInfoWindow', { 'content': marker.content }, this);
			});
			
		});
		
		object.gmap('option', 'zoom', 15);
		
		mapObject = map;
	});
	
	return this;
}

/*
// * UPDATE MARKERS TO THE MAPS - ATTACH THIS TO DRAG EVENT
 * function (div object, if draggable or not)
 * */
function updateMarkersToMap(object)
{
	alert('MarkerUpdateCodeHere');
}

/*
 * SET DRAG OF MAPS OBJECT
 * function (div object, if draggable or not)
 * */
function setDrag(object, bool)
{
	
	if(object.gmap('get', 'map') == undefined)
		initMapCurrentLocation(object);
		
	if(bool)
		object.gmap('get', 'map').set('draggable', true);
	else
		object.gmap('get', 'map').set('draggable', false);	
}

function setScollWheel(object, bool)
{
	
	if(object.gmap('get', 'map') == undefined)
		initMapCurrentLocation(object);
		
	if(bool)
		object.gmap('get', 'map').set('scrollwheel', true);
	else
		object.gmap('get', 'map').set('scrollwheel', false);	
}

function setZoom(object, zoomlevel)
{
	//object.gmap('option', 'zoom', zoomlevel);
}

$(document).ready(function(){
	
	//initMapCurrentLocation($('#googleMapsCanvas'));
	//init the google map
	
	//modal code?
	$('#searchModal1').on('shown.bs.modal', function (event) {
	
		initMarkersToMapsJSON({"markers":[ { "latitude":locationArray[1].lat, "longitude":locationArray[1].lng } ]}, $('#googleMapsModal'));
		setDrag($('#googleMapsModal'), false);
		setScollWheel($('#googleMapsModal'), false);
		$('#googleMapsModal').gmap('get', 'map').addListener('dragend', function()
		{
			updateMarkersToMap($('#googleMapsModal'));
		});
		
	});
initMarkersToMapsJSON({"markers":[ { "latitude":lat1, "longitude":lng1 } ]}, $('#googleMapsCanvas'));
setDrag($('#googleMapsCanvas'), false);
setScollWheel($('#googleMapsCanvas'), false);
$('#googleMapsCanvas').gmap('get', 'map').addListener('dragend', function()
{
	updateMarkersToMap($('#googleMapsCanvas'));
});
	/*
	$.getJSON( '/js/mapsloaderExampleFiles/sample.json', function(data) { 
		initMarkersToMapsJSON(data, $('#googleMapsCanvas'));
		
	}) 
	.done(function() {
		setDrag($('#googleMapsCanvas'), false);
		setScollWheel($('#googleMapsCanvas'), false);
		$('#googleMapsCanvas').gmap('get', 'map').addListener('dragend', function()
		{
			updateMarkersToMap($('#googleMapsCanvas'));
		});
	})
	.fail(function() {
		alert('Error - Fail to Retrieve Information');
	})
	.always(function() {
	
	});
	*/
});