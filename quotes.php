<?php
include("connections.php");
include ("nav.php");

session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}

$varaddnewquotes = $_POST["addnewquotes"];

if($_SERVER["REQUEST_METHOD"] == "POST") {
$f = fopen("news.txt", "a+");
fputs($f, "\n" . $varaddnewquotes);
echo '
<div class="container alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Quotes succesfully added!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
fclose($f);
}

?>


	<h1>Add New Quotes:</h1>
	<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
	<form action="quotes.php" method="POST" class="px-4 py-3">
	<div class="form-group">
<label class="text-primary" for="intrest">Quotes:</label>
	<input type="text" name="addnewquotes" required class="form-control"><br>
	
	<input type="submit" value="Submit" class="btn btn-primary">
	</div>
	</form>
	
	</div><br>

<?php
include("footer.php");
?>
