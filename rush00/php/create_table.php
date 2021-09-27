<?php
function create_mysqli_table($tab_name)
{
	if ($tab_name == "products")
	{
		$sql = "CREATE TABLE IF NOT EXISTS e_shop . products (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		price INT(6) NOT NULL,
		main_category VARCHAR(50) NOT NULL,
		sub_category VARCHAR(50),
		color VARCHAR(50),
		pic VARCHAR(50) NOT NULL
		)";
	}
	elseif ($tab_name == "users")
	{
		$sql = "CREATE TABLE IF NOT EXISTS e_shop . users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		uname VARCHAR(30) NOT NULL,
		password VARCHAR(30) NOT NULL
		)";
	}
	return ($sql);
}
?>
