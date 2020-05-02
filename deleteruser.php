<?php
include("connections.php");
include("nav.php");
session_start();

$vartxtusr = $_POST["txtusr"];



// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}

$vartblsusr = "tbl" . $vartxtusr;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$sqldrop = mysqli_query($conn, "DROP TABLE $vartblsusr");
	$sqldelusr = mysqli_query($conn, "DELETE FROM tbluser WHERE usr = '$vartxtusr'");	 
	echo "<script>alert(\"$vartxtusr succesfully deleted!\");</script>";
}

?>
<meta http-equiv="refresh" content="1440;url=logout.php" />
<center>
<b>Delete User</b><br>
<form action="deleteruser.php" method="post">
Enter username: <input type="text" name="txtusr">
<input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete data?')">
</form>
</center>


<b>Users:</b><br>
<?php
include("connections.php");
	$view_query = mysqli_query($conn, "SELECT * FROM tbluser ORDER BY datereg DESC");

	echo "<table border='1' width='100%' > ";
	echo "<tr>
		<td align='center'><b>Username</b></td>
		<td align='center'><b>Password</b></td>
        <td align='center'><b>Role</b></td>
        <td align='center'><b>Login last</b></td>
        <td align='center'><b>Date Reg</b></td>
		</tr>";
	
	while($row = mysqli_fetch_assoc($view_query)) {
		
		$db_usr = $row["usr"];
		$db_psw = $row["psw"];
        $db_role = $row["usr_role"];
		$db_lastlog = $row["lastlogin"];
		$db_reg = $row["datereg"];
		
		echo "<tr>
		<td>$db_usr</td>
		<td>$db_psw</td>
        <td>$db_role</td>
		<td>$db_lastlog</td>
		<td>$db_reg</td>
		</tr>";
	}
	
	echo "</table><br> ";
?>
<a href="logout.php" onclick="return confirm('Are you sure you want to log out? Any unsaved data will be lost.')";>Logout (<?php echo htmlspecialchars($_SESSION['susr']); ?>)</a><br><br>
<?php
include("footer.php");
?>
