<?php
include("head.php");
$file = fopen("../data/products.csv","r");
$importData_arr = array();
$i = 0;
while (($data = fgetcsv($file, 1000, ",")) !== FALSE)
{
	$num = count($data);

	for ($c = 0; $c < $num; $c++)
	{
		$importData_arr[$i][] = $data[$c];
	}
	$i++;
}
fclose($file);

?>

<html>
<body>
	<div style="display:inline;">
		<div style="display:inline;">
			<img src="../resources/jj_gi.jpg" />
			<p>Product name: <?php echo $importData_arr[1][1]; ?></p>
			<p>Price (euro): <?php echo $importData_arr[1][2]; ?></p>
			<p>Color: <?php echo $importData_arr[1][5]; ?></p>
		</div>
		<div style="display:inline;">
			<img src="../resources/bag_gloves.jpg" />
			<p>Product name: <?php echo $importData_arr[2][1]; ?></p>
			<p>Price (euro): <?php echo $importData_arr[2][2]; ?></p>
			<p>Color: <?php echo $importData_arr[2][5]; ?></p>
		</div>
		<div style="display:inline;">
			<img src="../resources/boxing_gloves.jpg" />
			<p>Product name: <?php echo $importData_arr[2][1]; ?></p>
			<p>Price (euro): <?php echo $importData_arr[2][2]; ?></p>
			<p>Color: <?php echo $importData_arr[2][5]; ?></p>
		</div>
		<div style="display:inline;">
			<img src="../resources/mouth_guard.jpg" />
			<p>Product name: <?php echo $importData_arr[2][1]; ?></p>
			<p>Price (euro): <?php echo $importData_arr[2][2]; ?></p>
			<p>Color: <?php echo $importData_arr[2][5]; ?></p>
		</div>
	</div>
</body>
</html>
