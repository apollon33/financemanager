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
<meta http-equiv="refresh" content="1440;url=logout.php" />
<center>
	<b>Control Panel</b><br><br>
	<a href="deleteruser.php" class="myButton">Delete User</a><br><br>
	<a href="quotes.php" class="myButton">Add New Quote</a><br><br>
</center>
<a href="logout.php" onclick="return confirm('Are you sure you want to log out? Any unsaved data will be lost.')";>Logout (<?php echo htmlspecialchars($_SESSION['susr']); ?>)</a><br><br>
<?php
include("footer.php");
?>
