<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
<?php

include("connections.php");


$varusr = $_POST['txtname'];

$varpsw = $_POST['txtpsw'];
$refno = "S" . date("mdyhis");
$profpic = "profpic/profpic.jpg";
$default = "signup";

//count reg users
$result=mysqli_query($conn, "SELECT count(*) as total from tbluser");
$data=mysqli_fetch_assoc($result);


//check if fields not empty

if ($varusr === NULL && $varpsw ===NULL){
		
	echo '<div class="container alert alert-info alert-dismissible fade show" role="alert">
	  <strong>Must!</strong> All fields required!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	
}else{
		
//check user existence
		
$sql = mysqli_query($conn, "SELECT * FROM tbluser WHERE usr='$varusr'");
		 
if(mysqli_num_rows($sql)>=1){
			
echo'<div class="container alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> User exists!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		  
}else{
				
//confirm password
				
if ($_POST["txtpsw"] === $_POST["txtcpsw"]) {
					
if(strlen(trim($_POST["txtpsw"])) < 6){
						
echo '<div class="container alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> Password must be 6 chars and up.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
					} else {
						
// register user
						
$sqlinsert = mysqli_query($conn, "INSERT INTO tbluser (usr,psw,usr_role,lastlogin,profpic,datereg) VALUES('$varusr','$varpsw','0','0','$profpic',CURRENT_TIMESTAMP)");
						
						
//create user table
						
$newtbl = "tbl" . $varusr;
						
$sqlnewtable = mysqli_query($conn, "CREATE TABLE $newtbl (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, refno VARCHAR(255) NOT NULL,datetime VARCHAR(255) NOT NULL,remarks VARCHAR(255),debit INT(11), credit INT(11), bal INT(11), exec VARCHAR(255), type VARCHAR(255))");

//insert bal 0
$sqlbal0 = mysqli_query($conn, "INSERT INTO $newtbl(refno,datetime,remarks,debit,credit,bal,exec,type) VALUES('$refno',CURRENT_TIMESTAMP,'$default','0','0','0','$varusr','$default')");

						
//echo "<script>alert('Signup succesful. Welcome $varusr!');</script>";

echo '
<div class="container alert alert-success alert-dismissible fade show" role="alert">
	  <strong>Hooray!</strong> Signup succesful. Welcome '.$varusr.'!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
	
	
';
					}
				
}else {
				   
echo '<div class="container alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> Password not match!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				}
			}
	
}

?>



	
<title>Signupa</title>

<h1 class="h3 mb-3 font-weight-normal text-center">OFM<span class="badge badge-pill badge-info"><?php echo $data['total'];?></span></h1>
<form class="px-4 py-3" method="post" action="signup.php">
	<div class="form-group">
		<label for="txtname">Username</label>
		<input type="text" class="form-control" name="txtname"  placeholder="Please choose a username." required>
	</div>
		
	<div class="form-group">
		<label for="txtpsw">Password</label>
		<input type="password" class="form-control" name="txtpsw" required>
	</div>
	
	<div class="form-group">
		<label for="txtcpsw">Confirm Password</label>
		<input type="password" class="form-control" name="txtcpsw" required>
	</div>
	

<input type="submit" class="btn btn-outline-primary" value="Sign Up" name="submit">
	

</form>

<div class="dropdown-divider"></div>
  <a class="dropdown-item" href="login2.php">Already have an account? Sign-in</a>


</div>
