<?php 
include("connections.php");
include("nav.php");

session_start();

$varprofpic = $_SESSION['sprofpic'];
$varsname = $_SESSION["susr"];
$varsisadmin = $_SESSION["sisadmin"];
// If session variable is not set it will redirect to login page

if(!isset($_SESSION['susr']) || empty($_SESSION['susr']))
{
  
header("location: login2.php");
  
exit;


}

$file_url = $_POST["txturl"];

function getRemoteFilesize($file_url, $formatSize = true)
{
    $head = array_change_key_case(get_headers($file_url, 1));
    // content-length of download (in bytes), read from Content-Length: field
	
    $clen = isset($head['content-length']) ? $head['content-length'] : 0;

    // cannot retrieve file size, return "-1"
    if (!$clen) {
        return -1;
    }

    if (!$formatSize) {
        return $clen; 
		// return size in bytes
    }

    $size = $clen;
    switch ($clen) {
        case $clen < 1024:
            $size = $clen .' B'; break;
        case $clen < 1048576:
            $size = round($clen / 1024, 2) .' KB'; break;
        case $clen < 1073741824:
            $size = round($clen / 1048576, 2) . ' MB'; break;
        case $clen < 1099511627776:
            $size = round($clen / 1073741824, 2) . ' GB'; break;
    }

    return $size; 
	// return formatted size
}
?>
	<title>Obtain File Size</title>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<h1>Obtain File Size</h1><br>  
Identify remote file size before downloading the file.<br><br>  
<input type="text" name="txturl" id="idurl" autofocus/>
<input type="submit"  value="Check" /><br>
File size: <b><?php echo getRemoteFilesize($file_url); ?></b><br>
</form>

<a href="logout.php" onclick="return confirm('Are you sure you want to log out? Any unsaved data will be lost.')";>Logout (<?php echo htmlspecialchars($_SESSION['susr']); ?>)</a><br><br>

<?php 
include("footer.php");
?>

