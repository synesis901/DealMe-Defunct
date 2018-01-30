/**
 * default loads
 */
$(document).ready(function(){
	
	/*search modal event
	$('#searchModal').on('shown.bs.modal', function () {
		$('#searchModal').focus()
	});*/
	
	//default states
	if($('form').lengh)
	{
		$('form').each(function() {
			
		});
	}
	
	//logics
	
	
	if($('#Search-Area').length)
	{
		$('#Search-Area').click(function () {
			
			$('.chkbox').each(function(i) {
				//alert('test');
				if($(this).is(":checked")){
					
					$(this).parent().css('background-color', 'rgba(255,255,255,0.5)');
		    	}
		    	else {
		    		
		    		$(this).parent().css('background-color', 'rgba(255,255,255,0.0)');
		    	}
			});
			
		});
	}
			
	
	//signup-Modal show on submit
	/*
	$(window).load(function(){
		$('#signup-Modal').modal('show');
	});
	*/
	
	//test accordion
	$('.dm_drop-container').hover(function(){
		$('.dm_drop-content',this).collapse('show');
	},function(){
		$('.dm_drop-content',this).collapse('hide');
	});	
});

