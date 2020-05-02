<?php
	session_start();
	unset($_SESSION['susr']);
	session_destroy();
	header("Location: login2.php");
	exit;
?>
