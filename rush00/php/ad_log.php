<?PHP

session_start();

function auth_admin($login, $passwd)
{
	$users_db = unserialize(file_get_contents('../private/passwd'));
	$credentials = false;
	foreach ($users_db as $key => $user)
	{
		if ($login === "Admin" && $user['passwd'] === hash('whirlpool', $passwd))
		{
			$credentials = true;
		}
	}
	return ($credentials);
}


if (auth_admin($_GET['login'], $_GET['passwd']))
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
	header("location: admin.php");
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo("Invalid credentials\n");
	header("location: index.php");
}

?>