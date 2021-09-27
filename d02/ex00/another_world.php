#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$array = array();
	$array = preg_split("/ +/", trim($argv[1]));
	$i = 0;
	while ($array[$i + 1] != NULL)
	{
		echo($array[$i] . " ");
		$i++;
	}
	echo($array[$i] . "\n");
}
?>