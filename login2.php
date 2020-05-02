<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
<?php
include("connections.php");
//count reg users
$result=mysqli_query($conn, "SELECT count(*) as total from tbluser");
$data=mysqli_fetch_assoc($result);

//if already login send to welcome page
if(isset($_SESSION['susr'])) { 
   header("location: index.php");
   exit;
}

//Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["susr"]) && $_SESSION["susr"] === true){
    header("location: index.php");
    exit;
}

// Processing form data when form is submitted
if(isset($_POST['submit'])){
	$usr = $_POST['username'];
	$psw = $_POST['password'];
	
	
	$query = mysqli_query($conn, "SELECT * FROM tbluser WHERE usr = '$usr' AND psw = '$psw'");
	
	$check = mysqli_fetch_array($query);
	
	if(isset($check)){
		session_start();
		
		// Store data in session variables
		$_SESSION["susr"] = $usr;
		
		$_SESSION["spw"] = $psw;
		$_SESSION["stbl"] = "tbl" . $usr;
		$_SESSION["sattempts"] = 3;
		
//fetching other infor for future use	
	$other_info = mysqli_query($conn,"SELECT * FROM tbluser WHERE usr = '$usr'");
	while($row = mysqli_fetch_assoc($other_info)) {
		
		$db_datereg = $row["datereg"];
		$db_lastlogin = $row["lastlogin"];
		$db_ppic = $row["profpic"];
		
		$_SESSION['sllog'] = $db_lastlogin;
		$_SESSION['sdtreg'] = $db_datereg;
		$_SESSION['sprofpic'] = $db_ppic;
	}
	
	
	
	//if admin
	$sqlisadmin = mysqli_query($conn, "SELECT usr_role AS yesadmin FROM tbluser where usr = '$usr'"); 
	$row = mysqli_fetch_assoc($sqlisadmin); 
	$varisadmin= $row['yesadmin'];
	$_SESSION['sisadmin'] = $varisadmin;
	
	//save new login login
	$varsusr = $_SESSION['susr'];
	$sqllastlogin = mysqli_query($conn, "UPDATE tbluser SET lastlogin = CURRENT_TIMESTAMP WHERE usr = '$varsusr'");	

		
	
	
	// Redirect user to welcome page
		header("location: index.php");
	}else{
		echo '<div class="container alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> Username or password was incorrect. Please try again.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';		
	}
}
?>

<title>Login</title>
	





<h1 class="h3 mb-3 font-weight-normal text-center">OFM<span class="badge badge-pill badge-info"><?php echo $data['total'];?></span></h1>
<form class="px-4 py-3" action = "login2.php" method = "POST">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Username</label>
      <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username" autofocus required>
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-outline-primary" name="submit">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="signup.php">Want to be financially free? Sign up</a>
<?php 
	?>
</div>
