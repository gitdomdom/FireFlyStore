<?php
// $dbHost="sql306.byethost18.com";
// $dbUser="b18_23768399";
// $dbPass="HT241198hvt916AT";
// $dbName="b18_23768399_htshop";
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="shopbanhang";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if($conn)
{
	$setLang = mysqli_query($conn, "SET NAMES 'utf8'");
}
else
{
	die("Kết nối thất bại".mysqli_connect_error());
}
?>