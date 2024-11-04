<?php
ob_start();
$host = "localhost";
$username = "root";
$password = "AstikTy@gi27@";
$dbname = "visitor_management";

$conn=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno())
{
	$db_connection_status =  "Error occured when coonection with database";
	$error_code = 0;
}
else
{
	$db_connection_status = "Connected";
	$error_code = 1;
	$_SESSION["Login-Key"] = "ALMA_CA";
	// print_r($_SESSION);
	
}
ob_end_flush();

echo $db_connection_status; // Output the connection status
?>