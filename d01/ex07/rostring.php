#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$array = preg_split("/ +/", trim($argv[1]));
	$temp = array_shift($array);	
	foreach($array as $elem)
		echo($elem . " ");
	echo($temp . "\n");
}
?>