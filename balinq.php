<?php
include("connections.php");
include("nav.php");
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}


/*get current balance*/
$varstbl = $_SESSION["stbl"];
$currbal = mysqli_query($conn, "SELECT * FROM $varstbl WHERE id=(SELECT max(id) FROM $varstbl)");
$count = mysqli_num_rows($currbal);
if($count !== "0"){
while($row = mysqli_fetch_array($currbal)){
				
			$db_bal = $row['bal'];
			
			}
	}
?>

<title>Balance Inquiry <?php echo $website_title_suffix;?></title>

<h1>Balance Inquiry</h1>
<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
<form method="post" action="balinq.php" class="px-4 py-3">
<div class="form-group">
<label class="text-primary" for="txtbal">Current Balance:</label>
 
<input class="form-control text-primary"  name="txtbal" id="txtbal" value="<?php echo $current_bal; ?>" readonly>
</div>

</form>
</div><br><br>


<?php include("footer.php");?>

