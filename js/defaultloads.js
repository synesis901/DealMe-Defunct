/**
 * default loads
 */
$(document).ready(function(){
	
	/*search modal event
	$('#searchModal').on('shown.bs.modal', function () {
		$('#searchModal').focus()
	});*/
	
	//default states
	
	
	//logics
	/*$('#Adv-Search-Area-Button').click(function () {
		
		if($(this).attr("class") == "glyphicon glyphicon-plus")
		{
			$(this).attr("class", "glyphicon glyphicon-minus");
		}
		else
		{
			$(this).attr("class", "glyphicon glyphicon-plus");
		}
	});*/
	
	$('#Search-Area').click(function () {
		for (i = 1; i <= 6; i++)
		{
			var divName = '#Adv-Search-Div-'.concat(i);
			var chkboxName = '#Adv-Search-Chkbox-'.concat(i);
			//Adv-Search-Chkbox-1
			//alert(chkboxName);
			
			if ($(chkboxName).is(":checked")) {
				//alert(divName);
		    	$(divName).css('background-color', 'rgba(255,255,255,0.5)');
		    }
		    else {
		    	//alert(divName);
		    	$(divName).css('background-color', 'rgba(255,255,255,0.0)');
		    }
		}
	});
	
	
});

