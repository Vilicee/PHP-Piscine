<?PHP

include ("head.php");

?>

<html>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<body>
	<div class="dropdown">
			<button id="addBask" class="dropbtn">Add an item</button>
			<div id="myAdd" class="dropdown-content">
				<form action="add_csv.php" name="mod_csv.php" method="POST">
					Product name: <input type="text" name="name" value=""/>
					Product price: <input type="text" name="price" value=""/>
					Main category: <input type="text" name="main_category" value=""/>
					Sub category: <input type="text" name="sub_category" value=""/>
					Color: <input type="text" name="color" value=""/>
					Submit: <input type="submit" name="submit" value="OK"/>
				  </form>
			</div>
		  </div>
		  <div class="dropdown">
			<button id="rmItem" class="dropbtn">Remove an item</button>
			<div id="myRM" class="dropdown-content">
				<form action="rm_csv.php" name="rm_item.php" method="POST">
					Product name: <input type="text" name="name" value=""/>
					Submit: <input type="submit" name="submit" value="OK"/>
				  </form>
			</div>
		  </div>
		  <div class="dropdown">
			<button id="Delete_User" class="dropbtn">Delete_User</button>
			<div id="myDelete" class="dropdown-content">
				<form action="adm_del_user.php" name="adm_del_user.php" method="POST">
					  Username : <input type="text" name="login" value=""/>
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
		  document.getElementById("LogOut").onclick = function() {logout_adm()};
		  function logout_adm() 
		  {
			document.getElementById("myLogOut").classList.toggle("show");
		  }

		  document.getElementById("addBask").onclick = function() {add_to_basket()};
		  function add_to_basket() 
		  {
			document.getElementById("myAdd").classList.toggle("show");
		  }

		  document.getElementById("rmItem").onclick = function() {rm_item()};
		  function rm_item() 
		  {
			document.getElementById("myRM").classList.toggle("show");
		  }
		  document.getElementById("Delete_User").onclick = function() {my_del_user()};
	
		function my_del_user() 
		{
	  		document.getElementById("myDelete").classList.toggle("show");
		}
		  </script>
	</body>
</html>