<?php 
include($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$name = $_POST['name'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	
	if($pass1 !== $pass2){
		Header("Location: /admin/dashboard.php?e=1");
	}
	
	$UA = array();
	$UA['_id'] = $_SESSION['login']; //$_SESSION['login']['_id'] !!!--------CHANGE THIS---------!!!
	$UA['Password'] = $pass1;
	$UA['Name'] = $name;

	$UAT = new m_UserAccount(false);
	$UAT->update($UA);
	$UAT->save();
	Header("Location: /admin/dashboard.php?d=".$UAT->get_error());
}else{
$UAT = new m_UserAccount($_SESSION['login']);
?>
	
	<h1 class="page-header">Profile Info</h1>
	<form data-toggle="validator" role="form" id="form1">
		<div class="form-group">
	    	<label for="email">Display Name</label>
	    	<input type="text" class="form-control" id="inputname" name="name" value="<?php echo $UAT->get_properties()['name']; ?>" required>
	  		<div class="help-block with-errors"></div>
	  	</div>
	  	
	  	<div class="form-group">
	    	<label for="password">Password</label>
	    	<input type="password" class="form-control" id="inputPassword" name="pass1" placeholder="Enter New Password" required>
	  		<div class="help-block with-errors"></div>
	  	</div>
	  	
	  	<div class="form-group">
	    	<label for="password">Confirm PasswordPassword</label>
	    	<input type="password" class="form-control" id="passwordConfirm" name="pass2" data-match="#inputPassword" data-match-error="Passwords does not match" placeholder="Confirm New Password" required>
	  		<div class="help-block with-errors"></div>
	  	</div>
	  	
		<button type="button" id="canceledit" class="btn btn-default">Cancel</button>
		<button type="submit" class="btn btn-default" formmethod="post" formaction="/admin/UserInformation/edituserinfo.php" form="form1">Submit</button>
	</form>
	<p>If you are wanting to change your email address please contact the admin explaining why. Then we can change it for you. Requires some modification on our end. Thank you understanding.</p>
<?php } ?>