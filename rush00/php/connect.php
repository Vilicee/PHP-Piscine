<?php
function connect()
{
	$mysqli = mysqli_connect("127.0.0.1", "root", "PHPrush00");
	if (!$mysqli) {
	    die("Failed to connect to MySQL: (" . $mysqli_connect_errno() . ") " . $mysqli->connect_error);
	}
	echo mysqli_get_host_info($mysqli) . "\n";

	$sql = "CREATE DATABASE IF NOT EXISTS e_shop";
	mysqli_query($mysqli, $sql);
	return ($mysqli);
}
?>
