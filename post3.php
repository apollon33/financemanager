<?php
include("connections.php");
include("nav.php");
session_start();
if(isset($_SESSION['susr'])){
    $text = $_POST['text'];
     
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['susr']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
}
?>
