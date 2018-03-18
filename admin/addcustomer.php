<?php
session_start();
	include 'connection.php';

	$name = $_POST["name"];
	$contact = $_POST["contact"];
	$status = $_POST["status"];
	$priority = $_POST["priority"];
	$assign = $_POST["assign"];
	$date = date("Y-m-d");
	if(1)
	{
		$query = "INSERT INTO company_trial VALUES(null,'{$name}','{$contact}','{$status}','{$date}','{$priority}','{$assign}')";
		if(mysqli_query($link, $query)){
			//header('Location:http://localhost:1234/admin/addc.php');
			$name2=$_SESSION['id'];
			die($name2);
			$table = 'company_trial';
			date_default_timezone_set('Asia/Kolkata');
			$time date('H:i');
			$query1 = "INSERT INTO change_by VALUES(null,'{$name2}','{$table}','{$date}','{$time}')";
			if(mysqli_query($link, $query1)){
				die("done");
			}
			else{
				die("not done");
			}
		}
		else{
			die('Invalid query: ' . mysql_error());
		}
	}
?>