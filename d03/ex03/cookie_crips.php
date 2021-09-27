<?PHP

$array = $_GET;
if($array['action'] == "set")
	setcookie($array['name'], $array['value']);
if($array['action'] == "get")
{
	if (isset($_COOKIE[$array['name']]))
		echo ($_COOKIE[$array['name']] .  "\n");
}
if ($array['action'] == "del")
	setcookie($array['name'], $array['value'], time()-3600);

?>