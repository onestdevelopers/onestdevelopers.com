<?php 
	session_start();
	include 'connection.php';
	 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		 header('Location:http://localhost:1234/admin/login.php');
	 }
else{
	if(isset($_GET["cid"])){
		$id =$_GET["cid"];
	}
	$error1 ="";
$error2 ="";
	if(1)
	{
		$query = "DELETE FROM client WHERE cid='{$id}'";
		if(mysqli_query($link, $query)){
			$name2=$_SESSION['id'];
			$date = date("Y-m-d");
			$table = 'client';
			date_default_timezone_set('Asia/Kolkata');
			$time = date('H:i');
			$query_type = 'delete';
			$rowid = $id;
			$query1 = "INSERT INTO `change_by` (`uid`, `tablename`, `query_type`, `rowid`, `date`, `time`) VALUES ('{$name2}', '{$table}', '{$query_type}', '{$rowid}', '{$date}', CURRENT_TIMESTAMP)";
			//INSERT INTO `change_by` (`uid`, `tablename`, `query_type`, `rowid`, `date`, `time`) VALUES ('{$name2}', '{$table}', '{$query_type}', '{$rowid}', '{$date}', CURRENT_TIMESTAMP);
			if(mysqli_query($link, $query1)){
				header('Location:http://localhost:1234/admin/companytrial.php');
			}
			else{
				die("not done");
			}
			//header('Location:http://localhost:1234/admin/companytrial.php');
		}
		else{
			die('Invalid query: ' . mysql_error());
		}
	}	
 }
?>