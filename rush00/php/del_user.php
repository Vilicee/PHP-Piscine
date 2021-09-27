<?PHP

if ($_POST['login'] && $_POST['passwd'] && $_POST['delete'] == "OK") 
{
	$users_db = unserialize(file_get_contents('../private/passwd'));
	$exist = false;
	$pwd = hash('whirlpool', $_POST['passwd']);
	foreach ($users_db as $key => $user) 
	{
		if ($user['login'] === $_POST['login'] && $user['passwd'] === $pwd)
		{
			$exist = true;
		}
		if ($exist)
		{
			unset($users_db[$key]['login']);
			unset($users_db[$key]['passwd']);
		}
	}
	if ($exist)
	{
		file_put_contents('../private/passwd', serialize($users_db));
		echo "Username deleted\n";
		header("location: index.php");
	}
	else
	{
		echo("Username does not exist, or invalid password\n");
		header("location: logged_in.php");
	}
} 
else 
	echo "ERROR\n";

?>
