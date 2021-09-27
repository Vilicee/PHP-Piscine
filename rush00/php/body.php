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
			<button id="signup" class="dropbtn">Sign up!</button>
			<div id="mySignup" class="dropdown-content">
				<form action="create_user.php" name="create.php" method="POST">
						 Username: <input type="text" name="login" value=""/>
						 <br />
						 Password: <input type="password" name="passwd" value=""/>
					  Submit: <input type="submit" name="submit" value="OK"/>
				  </form>
			</div>
		  </div>
		  <div class="dropdown">
			<button id="Mylog" class="dropbtn">Login</button>
			<div id="myLogin" class="dropdown-content">
				<form action="login.php" name="login.php" method="GET">
						 Username: <input type="text" name="login" value=""/>
						 <br />
						 Password: <input type="password" name="passwd" value=""/>
					  Submit: <input type="submit" name="submit" value="OK"/>
				  </form>
			</div>
		  </div>
		<script>
		document.getElementById("signup").onclick = function() {my_signup()};

		function my_signup()
		{
			document.getElementById("mySignup").classList.toggle("show");
		}

		document.getElementById("Mylog").onclick = function() {my_Login()};

		function my_Login()
		{
			document.getElementById("myLogin").classList.toggle("show");
		}
			</script>
		<button class="btn" type="button">Basket</button>
	</div>
	<div class="content">
		<div class="categories">
			<div style="display:block;">
				<a href="index2.php"><button class="btn btn2" type="button" action="index2.php">Books</button></a>
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
	<hr />
	<footer>
	<div class="dropdown">
			<button id="AdLog" class="dropbtn">Admin</button>
			<div id="myAdmin" class="dropdown-content">
				<form action="ad_log.php" name="ad_log.php" method="GET">
						 Username: <input type="text" name="login" value=""/>
						 <br />
						 Password: <input type="password" name="passwd" value=""/>
					  Submit: <input type="submit" name="submit" value="OK"/>
				  </form>
			</div>
		</div>
		<script>

		document.getElementById("AdLog").onclick = function() {my_3rd_function()};

		function my_3rd_function()
		{
			document.getElementById("myAdmin").classList.toggle("show");
		}
		</script>
		<p class="author">&copy; rkyttala & wvaara</p>
	</footer>
</body>
</html>
