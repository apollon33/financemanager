<?php 
include("connections.php");
include("nav.php");

session_start();

$varprofpic = $_SESSION['sprofpic'];
$varsname = $_SESSION["susr"];
$varsisadmin = $_SESSION["sisadmin"];
// If session variable is not set it will redirect to login page

if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}
?>

<script>
	function funccompute(){
		varpart = parseFloat(document.getElementById("txtpart").value);
		varwhole = parseFloat(document.getElementById("txtwhole").value);
		varpercent = varpart * 100 / varwhole;
		
		document.getElementById("txtpercent").value = varpercent.toFixed(2) + "%";
		}
</script>


<title>Percentage<?php echo $website_title_suffix;?></title>

<h1>Percentage</h1>
<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">

<form action="percent.php" method="post" class="px-4 py-3">
<div class="form-group">
<label class="text-primary" for="txtpart">Amount:</label>
<input type="text" id="txtpart" onkeyup="funccompute()" class="form-control" required>
</div> 

<div class="form-group">
<label class="text-primary" for="percent">is what percent of</label>
 <input type="text" id="txtwhole" onkeyup="funccompute()" class="form-control" required>
 </div> 
 
 <div class="form-group">
 <label class="text-primary" for="Result">Result:</label>
 <input type="text" id="txtpercent" class="form-control" readonly><br>
 </div>

</form>
</div>
<br>


<?php 
include("footer.php");
?>
