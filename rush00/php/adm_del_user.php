<?PHP

if ($_POST['login'] && $_POST['delete'] == "OK") 
{
	$users_db = unserialize(file_get_contents('../private/passwd'));
	$exist = false;
	foreach ($users_db as $key => $user) 
	{
		if ($user['login'] === $_POST['login'])
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
		header("location: admin.php");
	}
	else
	{
		echo("Username does not exist, or invalid password\n");
		header("location: admin.php");
	}
} 
else 
	echo "ERROR\n";

?>