function profileInfo()
{
	$("#profileInfo").load("UserInformation/userinfo.php", function(){
		$("#edituserinfo").click(function(){
			$("#profileInfo").load("UserInformation/edituserinfo.php", function(){
				
				$("#canceledit").click(function(){
					profileInfo();
				});
			});
			
			//do on load finish functons here
		});
		
	});
}

$(document).ready(function(){
	profileInfo();
	//load modules
	/*$("#profileInfo").load("UserInformation/userinfo.php", function(){
		$("#edituserinfo").click(function(){
			$("#profileInfo").load("UserInformation/edituserinfo.php", function(){
				$("#canceledit").click(function(){
					
				});
			});
			
			//do on load finish functons here
		});
		
	});*/
	
	
	
});