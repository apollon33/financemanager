<?php
include("connections.php");
include ("nav.php");

session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}


echo '<h1>Accounts 
</h1><div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">';

//personal info beg
//profile pic variables
$varsusr = $_SESSION["susr"];
$varpic = "profpic/" .$varsusr . ".jpg";
$vdatereg= $_SESSION['sdtreg'];

if(isset($_POST['upload'])) {	
	//save pic
	$sqlsavepic = mysqli_query($conn, "UPDATE tbluser SET profpic = '$varpic' WHERE usr = '$varsusr'"); 
	
}

if(!empty($_FILES["upload_file"])) {		
	$dir = "profpic/"; //no leading slash
	$newfile = $dir . $varsusr.".jpg";
    if(move_uploaded_file($_FILES["upload_file"]["tmp_name"],$newfile)) {
      echo '<div class="container alert alert-success alert-dismissible fade show" role="alert">
	  <strong>Success!</strong> Profile pic updated!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	}else{
        echo '<div class="container alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>Sorry!</strong> There was an error uploading the file, please try again!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
    }			 
}
//personal info end

//changing password beg
//changing password variables// Define variables and initialize with empty values
$varnewpw = $_POST['txtnewpw'];
$varsusr = $_SESSION['susr'];
$varspw = $_SESSION['spw'];

if(isset($_POST['change'])){
	
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
//changing password end

//activity log beg
$varllog= $_SESSION['sllog'];
//activity log end



?>








<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Personal Information
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <form action="profile_pic.php" method="post" enctype="multipart/form-data" class="px-4 py-3">
<div class="form-group">
<label class="text-secondary" >Financial free since: <?php echo $vdatereg;?></label><hr>
<label class="text-secondary" for="upload_file">Change profile Picture:</label>

    
	 
	 <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="upload_file">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>

<input type="submit" name="upload" value="Upload" class="btn btn-primary">
</div>
</form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Security
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
		
        <form method="post" method="changepw.php">
		<label class="text-secondary" for="">Change Password:</label>
<div class="form-group">
<label class="text-secondary" for="txtamount">Enter Old Password:</label>
<input type="password" class="form-control" name="txtoldpw" required>	
</div>	
<div class="form-group">
<label class="text-secondary" for="txtamount">Enter New Password:</label>
<input type="password" class="form-control" name="txtnewpw" required>	
</div>	
<div class="form-group">
<label class="text-secondary" for="txtamount">Confirm New Password:</label>
<input type="password" class="form-control" name="txtcnewpw" required>	
</div>	



<input type="submit" name="change" value="Change Password" class="btn btn-primary">
</form>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Activity Log
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <label class="text-secondary">Last login: <?php echo $varllog;?></label>
      </div>
    </div>
  </div>
</div>
</div><br><br>
<?php include("footer.php");?>
