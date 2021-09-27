<?PHP

session_start();
include("auth.php");
if (auth($_GET['login'], $_GET['passwd']))
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
	header("location: logged_in.php");
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo("Invalid credentials\n");
	header("location: landing_user_exist.php");
}

?>