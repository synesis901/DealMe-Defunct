/**
 * registration
 */
$(document).ready(function(){
	
	//copied from http://stackoverflow.com/questions/19491336/get-url-parameter-jquery
	$.urlParam = function(name){
		var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		if (results==null){
		   return null;
		}
		else{
		   return results[1] || 0;
		}
	}
	//signup-Modal show on submit
	if($.urlParam("e")){
		$('#signup-Modal').modal('show');
	}
	if($.urlParam("c")){
		$('#succ-Modal').modal('show');
	}
	if($.urlParam("l")){
		$('#login-Modal').modal('show');
	}
});