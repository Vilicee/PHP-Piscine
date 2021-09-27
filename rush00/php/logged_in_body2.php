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
				<button class="btn btn2" type="button" action="index2.php">Books</button>
			</div>
			<div style="display:block;">
				<a href="index_logged.php"><button class="btn btn2" type="button" action="index_logged.php">Equipment</button></a>
			</div>
			<div style="display:block;">
				<button class="btn btn2" type="button" style="text-align:center;">Bodyguards</button>
			</div>
		</div>
		<div class="product-demo">
			<table>
				<tr>
				<td style="width:25%;"><img src="../resources/501_book.jpg" />
						<p>Product name: <?php echo $importData_arr[10][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[10][2]; ?></p>
					<td style="width:25%;"><img src="../resources/juju_book.jpg" />
						<p>Product name: <?php echo $importData_arr[11][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[11][2]; ?></p>
					<td style="width:25%;"><img src="../resources/krav_maga_book.jpg" />
						<p>Product name: <?php echo $importData_arr[12][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[12][2]; ?></p>
					<td style="width:25%;"><img src="../resources/wing_chun_book.jpg" />
						<p>Product name: <?php echo $importData_arr[13][1]; ?></p>
						<p>Price (euro): <?php echo $importData_arr[13][2]; ?></p>
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