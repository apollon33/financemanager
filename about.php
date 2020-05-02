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

<title>About <?php echo $website_title_suffix;?></title>

<h1>About</h1>
<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">

<blockquote class="blockquote">
	<cite class="text-primary" title="Source Title">Mission</cite>
  <p class="mb-0 text-secondary	 text-justify">
  "Money Saved is Money Earned". <?php echo $website_title;?>'s mission is to teach people of all ages how financial systems work, and how to take advantage of these systems to save big money. Everyone could use more money, but in reality there are only two basic ways to increase your cash flow: increase your income or decrease your spending.
  </p>
  
</blockquote>

<blockquote class="blockquote">
	<cite class="text-primary" title="Source Title">Vision</cite>
  <p class="mb-0 text-secondary text-justify">
  <?php echo $website_title;?> will be the partner consumers trust to help them maintain a life of financial wellness.
  </p>
  
</blockquote>

</div><br><br>


<?php include("footer.php");?>

