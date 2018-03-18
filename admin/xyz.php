<?php 
session_start();
include 'connection.php';
 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	 header('Location:http://localhost:1234/admin/login.php');
 }
 else{
$id = 1;
if(!$id){
	header('Location:http://localhost:1234/admin/companytrial2.php');
}
else{
	$error1 ="";
$error2 ="";
if(1)
{
echo "hi";
$error1="51";
	$name = $_POST["name"];
	$contact = $_POST["contact"];
	$status = $_POST["status"];
	$priority = $_POST["priority"];
	$assign = $_POST["assign"];
	if(1)
	{
		$query = "UPDATE company_trial SET name='{$name}',contact='{$contact}',status='{$status}',priority='{$priority}',assign='{$assign}' WHERE id=1";
		if(mysqli_query($link, $query)){
			echo "updated";
		}
		else{
			die('Invalid query: ' . mysql_error());
		}
	}
}	
}
 }
?>