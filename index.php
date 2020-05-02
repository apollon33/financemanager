<?php
include("connections.php");
include("nav.php");
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}


?>

<title>Overview <?php echo $website_title_suffix;?></title>

<h1>Overview</h1>




<div class="card-deck">
  <div class="card shadow-lg">
    <div class="card-body">
      <h5 class="card-title text-dark">Quotes of the day</h5>
      <p class="mb-0 text-primary card-title text-center align-middle" ><img src="open-iconic/svg/double-quote-serif-left.svg" style="width:10px; height:10px;"><?php echo ucfirst($messages_from_file[$key]);?><img src="open-iconic/svg/double-quote-serif-right.svg" style="width:10px; height:10px;"></p>
    </div>
  </div>
  <div class="card shadow-lg bg-primary">
    <div class="card-body ">
      <h5 class="card-title text-dark">Current Balance</h5>
      <p class="card-text "><h1 class="card-title text-center ">P<?php echo $current_bal;?></h1></p>
	  <p class="card-text text-right font-weight-light font-italic"><small class="text-white ">Last updated <?php echo $lastbalupn;?></small></p>
    </div>
  </div>
  <div class="card shadow-lg bg-success">
    <div class="card-body">
      <h5 class="card-title text-dark">Total Deposits</h5>
      <p class="card-text "><h1 class="card-title text-center ">P<?php echo $creditsum;?></h1></p>
	  <p class="card-text text-right font-weight-light font-italic"><small class="text-white ">Last updated <?php echo $lastdepupn;?></small></p>
    </div>
  </div>
  <div class="card shadow-lg bg-danger">
    <div class="card-body">
      <h5 class="card-title text-dark">Total Withrawn</h5>
      <p class="card-text "><h1 class="card-title text-center ">P<?php echo $debitsum;?></h1></p>
	  <p class="card-text text-right font-weight-light font-italic"><small class="text-white ">Last updated <?php echo $lastwitupn;?></small></p>
    </div>
  </div>
</div>


<br><br>


<?php include("footer.php");?>

