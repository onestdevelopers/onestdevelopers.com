<?php 
session_start();
include 'connection.php';
 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	 header('Location:http://localhost:1234/admin/login.php');
 }
 else{
$error1 ="";
$error2 ="";
if(isset($_POST["name"])&& isset($_POST["contact"])&& isset($_POST['status']) && isset($_POST['priority']))
{
	$name = $_POST["name"];
	$contact = $_POST["contact"];
	$status = $_POST["status"];
	$priority = $_POST["priority"];
	$assign = $_POST["assign"];
	if($_POST["manager"])
		$manager = $_POST["manager"];
	else
		$manager = 'None';
	if($_POST["email"])
		$email = $_POST["email"];
	else
		$email = 'None';
	if($_POST["typeb"])
		$typeb = $_POST["typeb"];
	else
		$typeb = 'None';
	if($_POST["website"])
		$website = $_POST["website"];
	else
		$website = 'None';
	if($_POST["comments"])
		$comments = $_POST["comments"];
	else
		$comments = 'None';
	if($_POST["address"])
		$address = $_POST["address"];
	else
		$address = 'None';
	if($_POST["landmark"])
		$landmark = $_POST["landmark"];
	else
		$landmark = 'None';
	if($_POST["mono"])
		$mono = $_POST["mono"];
	else
		$mono = 'None';
	if($_POST["monc"])
		$monc = $_POST["monc"];
	else
		$monc = 'None';
	if($_POST["tueo"])
		$tueo = $_POST["tueo"];
	else
		$tueo = 'None';
	
	if($_POST["tuec"])
		$tuec = $_POST["tuec"];
	else
		$tuec = 'None';
	if($_POST["wedo"])
		$wedo = $_POST["wedo"];
	else
		$wedo = 'None';
	if($_POST["wedc"])
		$wedc = $_POST["wedc"];
	else
		$wedc = 'None';
	if($_POST["thurso"])
		$thurso = $_POST["thurso"];
	else
		$thurso = 'thurso';	
	if($_POST["thursc"])
		$thursc = $_POST["thursc"];
	else
		$thursc = 'None';
	
	if($_POST["frio"])
		$frio = $_POST["frio"];
	else
		$frio = 'None';
	if($_POST["fric"])
		$fric = $_POST["fric"];
	else
		$fric = 'None';
	if($_POST["sato"])
		$sato = $_POST["sato"];
	else
		$sato = 'None';
	if($_POST["satc"])
		$satc = $_POST["satc"];
	else
		$satc = 'None';
	if($_POST["suno"])
		$suno = $_POST["suno"];
	else
		$suno = 'None';
	if($_POST["sunc"])
		$suno = $_POST["sunc"];
	else
		$sunc = 'None';
	if($_POST["gallery"])
		$gallery = $_POST["gallery"];
	else
		$gallery = 'None';	
	if($_POST["rating"])
		$rating = $_POST["rating"];
	else
		$rating = 'None';
	if($_POST["verification"])
		$verification = $_POST["verification"];
	else
		$verification = 'None';
	$date = date("Y-m-d");
	if(1)
	{
		$query = "INSERT INTO `client` (`name`, `contact`, `status`, `date`, `priority`, `assigned_to`, `manager`, `email`, `website`, `typeb`, `comments`, `address`, `landmark`, `mono`, `monc`, `tueo`, `tuec`, `wedo`, `wedc`, `thurso`, `thursc`, `frio`, `fric`, `sato`, `satc`, `suno`, `sunc`, `gallery`, `rating`, `verification`) VALUES ('{$name}','{$contact}','{$status}','{$date}','{$priority}','{$assign}','{$manager}','{$email}','{$website}','{$typeb}','{$comments}','{$address}','{$landmark}','{$mono}','{$monc}','{$tueo}','{$tuec}','{$wedo}','{$wedc}','{$thurso}','{$thursc}','{$frio}','{$fric}','{$sato}','{$satc}','{$suno}','{$sunc}','{$gallery}','{$rating}','{$verification}')";
		if(mysqli_query($link, $query)){
			$name2=$_SESSION['id'];
			$date = date("Y-m-d");
			$table = 'client';
			date_default_timezone_set('Asia/Kolkata');
			$time = date('H:i');
			$query_type = 'insert';
			$querysub = "SELECT * FROM `client` order by cid desc limit 1";
			if($result = mysqli_query($link,$querysub)){
				while ($row = mysqli_fetch_array($result)) {
					$rowid= $row[0];
				}
			}
			else{
				die("no done");
			}
			//$rowid = $id;
			$query1 = "INSERT INTO `change_by` (`uid`, `tablename`, `query_type`, `rowid`, `date`, `time`) VALUES ('{$name2}', '{$table}', '{$query_type}', '{$rowid}', '{$date}', CURRENT_TIMESTAMP)";
			//INSERT INTO `change_by` (`uid`, `tablename`, `query_type`, `rowid`, `date`, `time`) VALUES ('{$name2}', '{$table}', '{$query_type}', '{$rowid}', '{$date}', CURRENT_TIMESTAMP);
			if(mysqli_query($link, $query1)){
				header('Location:http://localhost:1234/admin/companytrial.php');
			}
			else{
				die("not done");
			}

		}
		else{
			die('Invalid query: ' . mysql_error());
		}
	}
}
else {
	die("hello");
}
 }
?>