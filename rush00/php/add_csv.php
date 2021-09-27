<?php
import("connect.php");
$conn = connect();

// put submitted form data into array
$data = array();
foreach ($_POST as $attr)
{
	$data[] = "'" . $attr . "'";
}

// all new items have coming soon pic
$data[] = "'soon.png'";

// insert into mysql database
$headers = array("id", "name", "price", "main_category", "sub_category", "color", "pic");
$sql = "INSERT INTO `$tab_name` ($headers) VALUES ($data)";
if (!mysqli_query($conn, $sql))
	echo "FUBAR\n";

// append data to local csv file
$new_prod = "'',";
$new_prod .= implode(",", $data);
file_put_contents("../data/products.csv", $new_prod, FILE_APPEND);
?>
