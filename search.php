<?php 
include("connections.php");
include("nav.php");



$susr = $_SESSION['susr'];
$varstbl = $_SESSION['stbl'];

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}

if(empty($_POST['q'])){
	echo '
	<div class="container alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Opps!!</strong> Please Ref. No, Amount, Remarks or Personnel.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	
	';
}else{
	if(isset($_POST['search'])){
		$q = $_POST['q'];
		$query = mysqli_query($conn,"SELECT * FROM $varstbl WHERE (`refno` LIKE '%".$q."%') or (`remarks` LIKE '%".$q."%') OR (`exec` LIKE '%".$q."%') OR (`debit` LIKE '%".$q."%') OR (`credit` LIKE '%".$q."%') ");
		
		$count = mysqli_num_rows($query);
		
		if($count == "0"){
			echo '
			<div class="container alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> ' . $q. ' was not found!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
			';
		}else{
			

					echo "<div class='container-fluid shadow-lg p-3 mb-5 mt-5 bg-white rounded   align-middle'>
					<table class='table-bordered table-sm table-hover '  width='100%' ><tr>
						<td align='center'><b>Ref. No.</b></td>
						<td align='center'><b>Date Time</b></td>
						<td align='center'><b>Remarks</b></td>
						<td align='center'><b>Debit</b></td>
						<td align='center'><b>Credit</b></td>
						<td align='center'><b>Balance</b></td>
						</tr>";
					
					while($row = mysqli_fetch_array($query)) {
						
						$db_refno = $row["refno"];
						$db_datetime = $row["datetime"];
						$db_remarks = $row["remarks"];
						$db_debit = $row["debit"];
						$db_credit = $row["credit"];
						$db_bal = $row["bal"];
						
						echo "<tr>
						<td>$db_refno</td>
						<td>$db_datetime</td>
						<td>$db_remarks</td>
						<td>$db_debit</td>
						<td>$db_credit</td>
						<td>$db_bal</td>
						</tr>";
					}
					
					echo "</table></div><br> ";
						
							}
							
						}
						
					}
				
				?>


<?php include("footer.php");?>



