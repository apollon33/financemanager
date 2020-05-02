<?php
include("connections.php");

include("nav.php");


session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}





$refno = "D" . date("mdyhis");
$credit = $_POST["txtamount"];
$remarks = $_POST["txtremarks"];
$varstbl = $_SESSION['stbl'];
$varsusr = $_SESSION['susr'];
$type = "Deposit";


/*get old bal*/
$sqloldbal = mysqli_query($conn,"SELECT bal AS old_bal FROM $varstbl WHERE id=(SELECT max(id)  FROM $varstbl)");
$row = mysqli_fetch_assoc($sqloldbal);
$varoldbal = $row['old_bal'];

/*store new bal*/
$varnewbal = $_POST["txtbal"];

/*deposit*/
if(isset($_POST['deposit'])) {
$query = mysqli_query($conn, "INSERT INTO $varstbl(refno,datetime,remarks,debit,credit,bal,exec,type) VALUES('$refno',CURRENT_TIMESTAMP,'$remarks','0','$credit','$varnewbal','$varsusr','$type')");
echo '<div class="container alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Money deposited! Thank you for banking with us.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>


<title>Deposit<?php echo $website_title_suffix;?></title>

<!--credit-->
<script>
function funccredit(){
varbal = parseInt("<?php echo $varoldbal; ?>");
varamt = parseInt(document.getElementById("txtamount").value);
varcurrbal = varbal + varamt;
document.getElementById("txtbal").value = varcurrbal.toFixed(2);
}
</script>

<h1>Deposit
</h1><div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
<form method="post" action="deposit2.php" class="px-4 py-3">
<div class="form-group">
<label class="text-primary" for="txtamount">Amount:</label>

<input name="txtamount" class="form-control" id="txtamount" onkeyup="funccredit()" autofocus>	
</div>

<div class="form-group">
<label class="text-primary" for="txtremarks">Remarks:</label>

<input type="text" class="form-control" id="txtremarks" name="txtremarks" value="deposit">	
</div>

<input type="hidden" id="txtbal" name="txtbal" value="<?php echo $varnewbal; ?>"><br>

<input value="Submit" type="submit" name="deposit" class="btn btn-primary">
</div>
</center>
<br><br>



<?php 
include("footer.php");
?>

</form>

</div>

</body>

</html>

