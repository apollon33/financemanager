<title>Loan Calculator</title>
<?php 

include("connections.php");

include("nav.php");


session_start();

$varprofpic = $_SESSION['sprofpic'];
$varsname = $_SESSION["susr"];
$varsisadmin = $_SESSION["sisadmin"];
// If session variable is not set it will redirect to login page

if(!isset($_SESSION['susr']) || empty($_SESSION['susr']))
{
  
header("location: login2.php");
  
exit;


}



?>

<script>
	function computeInterest(){
		amountBorrowed = parseFloat(document.getElementById("amountBorrowed").value);
		percentInt = parseFloat(document.getElementById("percentInt").value) / 100;
		numDays = parseFloat(document.getElementById("numDays").value);
		
		intrest = amountBorrowed * percentInt * numDays / 30;
		document.getElementById("intrest").value = intrest.toFixed(2);
		
		toPay = parseFloat(amountBorrowed) + parseFloat(intrest);
		document.getElementById("toPay").value = toPay.toFixed(2);
		}
		
	function clearAll(){
		document.getElementById("amountBorrowed").value = "";
		document.getElementById("percentInt").value = "";
		document.getElementById("numDays").value = "";
		document.getElementById("intrest").value = "";
		document.getElementById("toPay").value = "";
		}
</script>


<h1>Loan Interest Calculator</h1>
<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
<form method="post" action="loancalc.php" class="px-4 py-3">
<div class="form-group">
<label class="text-primary" for="txtamount">Amount Borrowed:</label>
<input id="amountBorrowed" class="form-control" onchange="computeInterest()">
</div>

<div class="form-group">
<label class="text-primary" for="percentInt">Percent (%):</label>
<input id="percentInt" class="form-control" onchange="computeInterest()">
</div>

<div class="form-group">
<label class="text-primary" for="numDays"># of days borrowed:</label>
<input id="numDays" class="form-control" onchange="computeInterest()">
</div>

<div class="form-group">
<label class="text-primary" for="intrest">Interest:</label>
<input id="intrest" readonly class="form-control">
</div>

<div class="form-group">
<label class="text-primary" for="toPay">To Pay:</label>
<input id="toPay" readonly class="form-control">
</div>

<button onclick="computeInterest()" class="btn btn-primary">Compute</button>&nbsp;<button onclick="clearAll()" class="btn btn-primary">Clear</button>
</div>
</form><br>
</div>


<?php 
include("footer.php");
?>

