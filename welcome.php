<?php 

include("connections.php");

include("nav.php");


session_start();

$varprofpic = $_SESSION['sprofpic'];
$varsname = $_SESSION['susr'];
$varsisadmin = $_SESSION["sisadmin"];




?>



<meta http-equiv="refresh" content="1440;url=logout.php" />


<b>Searcha:</b><br>
		<form method="POST" action="search.php">
			<input type="text" autofocus name="q" placeholder="Type anything" ><br>
			<input type="submit" name="search" value="Search" class="myButton">
		</form>
		</center>

<br><br>
<span style="font-style: italic;">Select Transaction:</span><br>
<br>

<a href="balinq.php" class="myButton"><span style="font-weight: bold;">Balance Inquiry</span></a><br><br>

<a href="deposit2.php" class="myButton"><span style="font-weight: bold;">Deposit</span></a><br><br>

<a href="withraw2.php" class="myButton"><span style="font-weight: bold;">Withdraw</span></a><br><br>

<a href="soa.php" class="myButton"><span style="font-weight: bold;">Transaction History</span></a><br><br>

<a href="changepw.php" class="myButton"><span style="font-weight: bold;">Change Password</span></a><br><br>

<a href="servicestools.php" title="Saving tools, calculators and so on..." class="myButton"><span style="font-weight: bold;">Services and Tools</span></a><br><br>

<a href="index3.php" title="If you have questions" class="myButton"><span style="font-weight: bold;">Chat</span></a><br><br>

<?php
//show control panel for admin
	if ($varsisadmin == "1"){
		echo "<a class=\"myButton\" href=\"control.php\">Control Panel</a>";
	}
?>
</div>
<br><br>




<?php

//display lastlog
$varllog= $_SESSION['sllog'];
echo "Last Login: " . $varllog . "<br>";


?>



</center>


<?php 
include("footer.php");
?>
