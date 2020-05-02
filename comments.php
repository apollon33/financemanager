<?php include("nav.php");
session_start();
?>
<meta http-equiv="refresh" content="1440;url=logout.php" />
<title>Commenst</title>
<h1>Comments</h1>

<script src="//www.powr.io/powr.js?external-type=html"></script> 
 <div class="powr-comments" id="3d56edf9_1539589119"></div>
 
 <a href="logout.php" onclick="return confirm('Are you sure you want to log out? Any unsaved data will be lost.')";>Logout (<?php echo htmlspecialchars($_SESSION['susr']); ?>)</a><br><br>
 
 <?php 
include("footer.php");
?>
