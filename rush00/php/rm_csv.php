<?php
import("connect.php");

$conn = connect();

$name = $_POST[0];

$sql = "DELETE FROM `products` WHERE name = $name";
if (!mysqli_query($conn, $sql))
	echo "FUBAR\n";

?>
