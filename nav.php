<?php 
include("connections.php");
session_start();






$varprofpic = $_SESSION['sprofpic'];
$varsname = $_SESSION['susr'];
$varsisadmin = $_SESSION["sisadmin"];
$varstbl = $_SESSION['stbl'];

//count all txn
$total_query=mysqli_query($conn, "SELECT count(*) as total_txn from $varstbl where remarks<>'signup'");
$total_txn=mysqli_fetch_assoc($total_query);

//count all deposit txn
$deposit_query=mysqli_query($conn, "SELECT count(*) as total_txn_deposit from $varstbl where type='deposit'");
$total_txn_deposit=mysqli_fetch_assoc($deposit_query);

//count all deposit txn
$withraw_query=mysqli_query($conn, "SELECT count(*) as total_txn_withraw from $varstbl where type='withraw'");
$total_txn_withraw=mysqli_fetch_assoc($withraw_query);


//current status beg
/*get current balance*/
$currbal = mysqli_query($conn, "SELECT * FROM $varstbl WHERE id=(SELECT max(id) FROM $varstbl)");
$count = mysqli_num_rows($currbal);
if($count !== "0"){
while($row = mysqli_fetch_array($currbal)){
				
			$db_bal = $row['bal'];
			$current_bal = $db_bal;
			
			}
	}
	
	
	
//sum debit and credit beg
$sqldebit = mysqli_query($conn, "SELECT SUM(debit) AS debit_sum FROM $varstbl"); 
$row = mysqli_fetch_assoc($sqldebit); 
$debitsum = $row['debit_sum'];

$sqlcredit = mysqli_query($conn, "SELECT SUM(credit) AS credit_sum FROM $varstbl"); 
$row = mysqli_fetch_assoc($sqlcredit); 
$creditsum = $row['credit_sum'];
//sum debit and credit end



//last updated beg

	
//withrawn
$lastwitupq = mysqli_query($conn, "SELECT * FROM $varstbl WHERE type='withraw' ORDER BY datetime DESC limit 1");
$lastwitupc = mysqli_num_rows($lastwitupq);
if($lastwitupc !== "0"){
while($roww = mysqli_fetch_array($lastwitupq)){
				
			$db_lastwitupd = $roww['datetime'];
			$lastwitupn = $db_lastwitupd;
			
			}
	}
//deposit
$lastdepupq = mysqli_query($conn, "SELECT * FROM $varstbl WHERE type='deposit' ORDER BY datetime DESC limit 1");
$lastdepupc = mysqli_num_rows($lastdepupq);
if($lastdepupc !== "0"){
while($rowa = mysqli_fetch_array($lastdepupq)){
				
			$db_lastdepupd = $rowa['datetime'];
			$lastdepupn = $db_lastdepupd;
			
			}
	}
//balance
$lastbalupq = mysqli_query($conn, "SELECT * FROM $varstbl ORDER BY datetime DESC limit 1");
$lastbalupc = mysqli_num_rows($lastbalupq);
if($lastbalupc !== "0"){
while($rowb = mysqli_fetch_array($lastbalupq)){
				
			$db_lastbalupd = $rowb['datetime'];
			$lastbalupn = $db_lastbalupd;
			
			}
	}
//last updated end




//current status end

//quotes beg
//displays random quotes
function loadMessagesFromFile($file)
{
    if(!file_exists($file))
    {
        return false;
    }

    $fh       = fopen($file, 'r');
    $messages = array();

    while($data = fgets($fh))
    {
        $messages[] = $data;
    }

    fclose($fh);

    return $messages;
}

$messages_from_file = loadMessagesFromFile('news.txt');
$key = array_rand($messages_from_file);
//quotes end
?>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
  $('[data-toggle="popover"]').popover()
})

$(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})
</script>
<nav class="container bg-secondary text-white navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  
  
  <a class="navbar-brand" href="index.php"><?php echo $website_title;?></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="balinq.php">Balance Inquiry</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="deposit2.php">Deposit<span class="badge badge-primary  badge-pill"><?php echo $total_txn_deposit["total_txn_deposit"];?></span></a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="withraw2.php">Withdraw<span class="badge badge-primary badge-pill"><?php echo $total_txn_withraw["total_txn_withraw"];?></span></a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="soa.php">Transaction History<span class="badge badge-primary badge-pill"><?php echo $total_txn["total_txn"];?></span></a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="servicestools.php">Tools</a>
      </li>
	  
	<!-- Dropdown -->
	  
    </ul>
	
	<form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      <input class="form-control mr-sm-2" type="text" name="q" data-toggle="tooltip" data-placement="bottom" title="Referrence Code, Transaction Type, Amount" placeholder="Search <?php echo $_SESSION["susr"]."'s ".$website_title;?>...">
      <input class="btn btn-primary my-2 my-sm-0" name="search" value="Search" type="submit">
    </form>&nbsp;
      
	  <a class="navbar-brand "  href="#" data-toggle="popover" data-placement="bottom" data-html="true" title="
	  <a href='profile_pic.php' class='text-decoration-none'>Account</a><br>
	  <a href='logout.php' class='text-decoration-none'>Logout</a>
	  
	  "><img class="rounded border border-primary" src="<?php echo $varprofpic;?>" alt="<?php echo $varsname;?>"   style="width:40px; height:40px;"></a>
	  
	  
	  
  </div>
  
</nav>

<div class='container bg-secondary text-white '>
