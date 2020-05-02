<?php
include("connections.php");
include ("nav.php");

session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}
?>
	<h1>Frequently asked questions</h1>
	<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded col-md-4  align-middle">
<div class="media position-relative">
  <img src="open-iconic/svg/info.svg" class="mr-3" alt="...">
  <div class="media-body">
    <h6 class="mt-0 text-primary">What is OFM?</h6>
    <p class="text-muted font-weight-light">OFM or Online Finace Manager is an expense tracker.</p>
  </div>
</div>
<div class="media position-relative">
  <img src="open-iconic/svg/info.svg" class="mr-3" alt="...">
  <div class="media-body">
    <h6 class="mt-0 text-primary">Did you collect credit card information?</h6>
    <p class="text-muted font-weight-light">No. Privacy is our primary concern.</p>
  </div>
</div>
<div class="media position-relative">
  <img src="open-iconic/svg/info.svg" class="mr-3" alt="...">
  <div class="media-body">
    <h6 class="mt-0 text-primary">Can I transact/pay online purchases?</h6>
    <p class="text-muted font-weight-light">No. OFM is not a payment gateway.</p>
  </div>
</div>
<div class="media position-relative">
  <img src="open-iconic/svg/info.svg" class="mr-3" alt="...">
  <div class="media-body">
    <h6 class="mt-0 text-primary">Why do I need an account?</h6>
    <p class="text-muted font-weight-light">All sorts of reasons. By having an account you'll be able to access the latest tips and updates, manage your finances and participate in our community forums.</p>
  </div>
</div>
<div class="media position-relative">
  <img src="open-iconic/svg/info.svg" class="mr-3" alt="...">
  <div class="media-body">
    <h6 class="mt-0 text-primary">How do I close my account?</h6>
    <p class="text-muted font-weight-light">We're sorry to see you go. :( <a href="mailto:laudeniolorence@gmail.com?subject=Please close my account">Drop us a line</a> and we'll close your account immediately.</p>
  </div>
</div>
	</div>
	
	
	
	<br>

<?php
include("footer.php");
?>
