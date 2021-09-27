#!/usr/bin/php
<?php
include("connect.php");
include("import_csv.php");
include("create_table.php");

$conn = connect();

mysqli_query($conn, create_mysqli_table("products"));
mysqli_query($conn, create_mysqli_table("users"));

import_csv($conn, "../data/products.csv", "products");
?>
