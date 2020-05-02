<?php
include("nav.php");
include("connections.php");

session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['susr']) || empty($_SESSION['susr'])){
header("location: login2.php");
exit;
}
$susr = $_SESSION['susr'];
$varstbl = $_SESSION['stbl'];

$ito_dapat = mysqli_query($conn, "SELECT * FROM $varstbl where remarks<>'signup' ORDER BY datetime DESC");
?>

<title>Transaction History<?php echo $website_title_suffix;?></title>
<h1>Transaction History</h1>

<form class="form-inline" method="POST" action="soa.php">
<label for="from" class="mr-sm-2">From:</label>
<input type="date" id="from_date" class="form-control  mr-sm-2"  name="from_date" >
<label for="to" class="mr-sm-2">To:</label>
<input type="date"  class="form-control  mr-sm-2"  name="to_date" id="to_date">
 
<label for="type" class="mr-sm-2">Type:</label>
<select name="type" id="typesa" value="" class="form-control  mr-sm-2">
    <option name="type" value=""></option>
    <option name="type" value="Withraw">Withraw</option>
    <option name="type" value="Deposit">Deposit</option>
</select>

<input type="submit" class="btn btn-primary " value="Filter" name="filter" >&nbsp;
<input type="submit" class="btn btn-primary " value="All" name="all" >
</form>

<?php



//filter beg
if(isset($_POST['filter'])){
  $v_from_date = $_POST['from_date'];
  $v_to_date = $_POST['to_date'];
  $type = $_POST['type'];
  $count = 0;
  $sql = "";

$sql_select ="SELECT * FROM $varstbl";

if(!empty($v_from_date)){
    if(!empty($sql)){
          $sql .= " AND ";
       }

   $sql.=" LEFT(datetime,10)>='$v_from_date' ";
}

if(!empty($v_to_date)){
    if(!empty($sql)){
          $sql .= " AND ";
       }

   $sql.=" LEFT(datetime,10)<='$v_to_date' ";
}

if(!empty($type)){
    if(!empty($sql)){
          $sql .= " AND ";
       }

   $sql.=" type='$type' ";
}




if(!empty($sql)){
      $sql = " WHERE ".$sql;

      $ewan = $sql_select.$sql.' ORDER BY datetime DESC';//dapat wala ng " sa unahan at huli



      $ito_dapat = mysqli_query($conn,$ewan);
      $count = mysqli_num_rows($ito_dapat);


 }



}
//filrer end	

if(isset($_POST['all'])){

$ito_dapat = mysqli_query($conn, "SELECT * FROM $varstbl where remarks<>'signup' ORDER BY datetime DESC"); 
}
	echo "<div class='container-fluid shadow-lg p-3 mb-5 mt-5 bg-white rounded   align-middle'><table  width='100%' class='table-bordered table-sm table-hover '> ";
	echo "<tr class='bg-info text-white'>
		<td align='center'><b>Ref. No.</b></td>
		<td align='center'><b>Date Time</b></td>
		<td align='center'><b>Remarks</b></td>
        <td align='center'><b>Debit (P". $debitsum .")</b></td>
        <td align='center'><b>Credit (P". $creditsum .")</b></td>
        <td align='center'><b>Balance</b></td>
        
		</tr>";
	
	while($row = mysqli_fetch_assoc($ito_dapat)) {
		
		$db_refno = $row["refno"];
		$db_datetime = $row["datetime"];
        $db_remarks = $row["remarks"];
		$db_debit = $row["debit"];
		$db_credit = $row["credit"];
		$db_bal = $row["bal"];
		
		
		echo "<tr>
		<td>$db_refno</td>
		<td>$db_datetime</td>
        <td>$db_remarks</td>
		<td>$db_debit</td>
		<td>$db_credit</td>
		<td>$db_bal</td>
		
		</tr>";
	}
	
	echo "</table></div><br> ";
	//mysqli_close($conn);
	

	
	
	?>
	
	

<?php include("footer.php");?>
