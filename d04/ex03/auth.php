<?PHP

function auth($login, $passwd)
{
	$users_db = unserialize(file_get_contents('../private/passwd'));
	foreach ($users_db as $key => $user)
	{
		if ($user['login'] === $login && $user['passwd'] === hash('whirlpool', $passwd))
		{
			return(TRUE);
		}
		else
		{
			return(FALSE);
		}
	}
}

?>