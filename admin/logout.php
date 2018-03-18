<?php
// Start the session
session_start();
?>
<?php
	session_destroy ();
	header('Location:http://localhost:1234/admin/login.php');
?>