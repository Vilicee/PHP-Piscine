<html>
<body>
	<h2>Username already exists or invalid credentials</h2><br>
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
		document.getElementById("Mylog").onclick = function() {user_login()};

		function user_login() 
		{
			document.getElementById("myLogin").classList.toggle("show");
		}
			</script>
		<button class="btn" type="button">Basket</button>
	</div>
	<div class="content">
		<div class="categories">
			<div style="display:block;">
				<button class="btn btn2" type="button">Books</button>
			</div>
			<div style="display:block;">
				<button class="btn btn2" type="button">Equipment</button>
			</div>
			<div style="display:block;">
				<button class="btn btn2" type="button" style="text-align:center;">Bodyguards</button>
			</div>
		</div>
		<div class="product-demo">
			<table>
				<tr>
					<td><img src="../resources/jj_gi.jpg" /><p>Jujitsu Gi</p></td>
					<td><img src="../resources/bag.jpg" /><p>Training Bag</p></td>
					<td><img src="../resources/speed_bag.jpg" /><p>Speed Bag</p></td>
				</tr>
				<tr>
					<td><img src="../resources/boxing_gloves.jpg" /><p>Training Gloves</p></td>
					<td><img src="../resources/bag_gloves.jpg" /><p>Bag Gloves</p></td>
					<td><img src="../resources/shorts.jpg" /><p>Boxing Shorts</p></td>
				</tr>
				<tr>
					<td><img src="../resources/mouth_guard.jpg" /><p>Mouth Guard</p></td>
					<td><img src="../resources/shin_guard.jpg" /><p>Shin Guards</p></td>
					<td><img src="../resources/wraps.jpg" /><p>Support Wraps</td>
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
		  document.getElementById("AdLog").onclick = function() {admin_login()};
		  
		  function admin_login() 
		  {
			document.getElementById("myAdmin").classList.toggle("show");
		  }
		  </script>
		<p class="author">&copy; rkyttala & wvaara</p>
	</footer>
</body>
</html>