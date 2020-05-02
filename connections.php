<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbfinance";
$datatable = "tbldebitcredit"; // MySQL table name
$usertable = "tbluser"; // users
$usrtable = $_SESSION["stbl"];

global $website_title;
global $website_title_suffix;
global $current_user;
$website_title = "OFM";
$website_title_suffix = " | OFM";
$current_user = $_SESSION["susr"];
$profile_pic = $_SESSION['sprofpic'];

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start;	
?>
<meta http-equiv="refresh" content="1440;url=logout.php" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="<?php echo $profile_pic;?>" type="image/x-icon">
<link rel="icon" href="<?php echo $profile_pic;?>" type="image/x-icon">

