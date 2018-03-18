
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
if(isset($_POST["name"])&& isset($_POST["contact"] )&& isset($_POST['status']) && isset($_POST['priority']))
{
	$id = $_POST["id"];
	$name = $_POST["name"];
	$contact = $_POST["contact"];
	$status = $_POST["status"];
	$priority = $_POST["priority"];
	$assign = $_POST["assign"];
	if(1)
	{
		$query = "UPDATE client SET name='{$name}',contact='{$contact}',status='{$status}',priority='{$priority}',assigned_to='{$assign}' WHERE cid='{$id}'";
		if(mysqli_query($link, $query)){
			die("comp")
			$name2=$_SESSION['id'];
			die("hi");
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
			//header('Location:http://localhost:1234/admin/companytrial.php');
		}
		else{
			die('Invalid query: ' . mysql_error());
		}
	}

}
else{
	$query = "SELECT * FROM client WHERE cid='{$id}'";
		if($result = mysqli_query($link,$query)){
			while ($row = mysqli_fetch_array($result)) {
				$name = $row[1];
				$contact = $row[2];
				$status = $row[3];
				$priority = $row[5];
				$assign = $row[6];
			}
}
else{
	die('Invalid select query: ' . mysql_error());
}
}	
 }
?>