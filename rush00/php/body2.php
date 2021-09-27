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
				<button class="btn btn2" type="button" action="index2.php">Books</button>
			</div>
			<div style="display:block;">
				<a href="index.php"><button class="btn btn2" type="button" action="index2.php">Equipment</button></a>
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
