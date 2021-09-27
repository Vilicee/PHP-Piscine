<?PHP

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
	<div class="top-banner">
		<img id="logo" src="../resources/logo-transparent.png" style="float:left" />
		<h1 style="">Chokehold commerce</h1>
		<div class="dropdown">
			<button id="Delete_User" class="dropbtn">Delete_User</button>
			<div id="myDelete" class="dropdown-content">
				<form action="del_user.php" name="del_user.php" method="POST">
					  Username : <input type="text" name="login" value=""/>
					  <br />
						Password: <input type="password" name="passwd" value=""/>
					  Submit: <input type="submit" name="delete" value="OK"/>
				  </form>
			</div>
		  </div>
		  <div class="dropdown">
			<button id="LogOut" class="dropbtn">Logout</button>
			<div id="myLogOut" class="dropdown-content">
				<form action="logout.php" name="logout.php" method="GET">
					  Logout: <input type="submit" name="submit" value="OK"/>
				  </form>
			</div>
		  </div>
		  <script>

		  document.getElementById("LogOut").onclick = function() {my_log_out()};
		  function my_log_out()
		  {
			document.getElementById("myLogOut").classList.toggle("show");
		  }

		  document.getElementById("Delete_User").onclick = function() {my_del_user()};

		  function my_del_user()
		  {
			document.getElementById("myDelete").classList.toggle("show");
		  }
		  </script>
		<button class="btn" type="button">Basket</button>
	</div>
	<div class="content">
		<div class="categories">
			<div style="display:block;">
				<a href="index_logged2.php"><button class="btn btn2" type="button" action="index_logged2.php">Books</button></a>
			</div>
			<div style="display:block;">
				<button class="btn btn2" type="button" action="index.php">Equipment</button>
			</div>
			<div style="display:block;">
				<button class="btn btn2" type="button" style="text-align:center;">Bodyguards</button>
			</div>
		</div>
		<div class="product-demo">
			<table>
				<tr>
				<td><img src="../resources/jj_gi.jpg" />
						<p>Product name: <?php echo $importData_arr[1][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[1][2]; ?></p>
						<p>Color: <?php echo $importData_arr[1][5]; ?></p></td>
					<td><img src="../resources/bag.jpg" />
						<p>Product name: <?php echo $importData_arr[6][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[6][2]; ?></p>
						<p>Color: <?php echo $importData_arr[6][5]; ?></p></td></td>
					<td><img src="../resources/speed_bag.jpg" />
						<p>Product name: <?php echo $importData_arr[7][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[7][2]; ?></p>
						<p>Color: <?php echo $importData_arr[7][5]; ?></p></td></td>
				</tr>
				<tr>
					<td><img src="../resources/boxing_gloves.jpg" />
						<p>Product name: <?php echo $importData_arr[3][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[3][2]; ?></p>
						<p>Color: <?php echo $importData_arr[3][5]; ?></p></td>
					<td><img src="../resources/bag_gloves.jpg" />
						<p>Product name: <?php echo $importData_arr[2][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[2][2]; ?></p>
						<p>Color: <?php echo $importData_arr[2][5]; ?></p></td>
					<td><img src="../resources/shorts.jpg" />
						<p>Product name: <?php echo $importData_arr[9][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[9][2]; ?></p>
						<p>Color: <?php echo $importData_arr[9][5]; ?></p></td>
				</tr>
				<tr>
					<td><img src="../resources/mouth_guard.jpg" />
						<p>Product name: <?php echo $importData_arr[4][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[4][2]; ?></p>
						<p>Color: <?php echo $importData_arr[4][5]; ?></p></td>
					<td><img src="../resources/shin_guard.jpg" />
						<p>Product name: <?php echo $importData_arr[5][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[5][2]; ?></p>
						<p>Color: <?php echo $importData_arr[5][5]; ?></p></td>
					<td><img src="../resources/wraps.jpg" />
						<p>Product name: <?php echo $importData_arr[8][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[8][2]; ?></p>
						<p>Color: <?php echo $importData_arr[8][5]; ?></p></td>
				</tr>
			</table>
		</div>
	</div>
	<hr/>
	<footer>
		<p class="author">&copy; rkyttala & wvaara</p>
	</footer>
</body>
</html>
