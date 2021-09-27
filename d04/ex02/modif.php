<?PHP

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] == "OK") 
{
	$users_db = unserialize(file_get_contents('../private/passwd'));
	$exist = false;
	$pwd = hash('whirlpool', $_POST['oldpw']);
	foreach ($users_db as $key => $user) 
	{
		if ($user['login'] === $_POST['login'] && $user['passwd'] === $pwd)
		{
			$exist = true;
			$users_db[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
		}
	}
	if ($exist)
	{
		file_put_contents('../private/passwd', serialize($users_db));
		echo "OK\n";
	}
	else
	{
		echo("ERROR\n");
	}
} 
else 
	echo "ERROR\n";

?>