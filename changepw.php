<?php 
include("connections.php");
include("nav.php");

session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || !isset($_SESSION['spw']) || empty($_SESSION['susr'])){
  header("location: login2.php");
  exit;
}

// Define variables and initialize with empty values
$varnewpw = $_POST['txtnewpw'];
$varsusr = $_SESSION['susr'];
$varspw = $_SESSION['spw'];


if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	//validate old password
	if ($varspw !== $_POST['txtoldpw']){
		
		
					echo '
			
			<div class="container alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Opps!</strong> Old password is incorrect!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
			';

	} else {
		 // Confirm new password
		if($varnewpw !== $_POST['txtcnewpw']){
			echo '
			
			<div class="container alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> New password not match.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
			';
		} else {
			// Password updated successfully. Destroy the session, and redirect to login page
			$sql = mysqli_query($conn, "UPDATE tbluser SET psw = '$varnewpw' WHERE usr = '$varsusr'");
			session_destroy();			                
			header("location: login2.php");
			exit();
		}
	}
	
}
?>
<meta http-equiv="refresh" content="1440;url=logout.php" />
<title>Change Password</title>
<h1>Change Password</h1>
<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
<form method="post" method="changepw.php">
<div class="form-group">
<label class="text-primary" for="txtamount">Enter Old Password:</label>
<input type="password" class="form-control" name="txtoldpw" required>	
</div>	
<div class="form-group">
<label class="text-primary" for="txtamount">Enter New Password:</label>
<input type="password" class="form-control" name="txtnewpw" required>	
</div>	
<div class="form-group">
<label class="text-primary" for="txtamount">Confirm New Password:</label>
<input type="password" class="form-control" name="txtcnewpw" required>	
</div>	



<input type="submit" name="sumbmit" value="Submit" class="btn btn-primary">
</form>
</div>
<br><br>

<?php include("footer.php");?>
