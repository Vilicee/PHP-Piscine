#!/usr/bin/php
<?PHP

function sorter($str1, $str2)
{
	$i = 0;
	$haystack = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";
	while($i < strlen($str1) || $i < strlen($str2))
	{
		$str1_i = stripos($haystack, $str1[$i]);
		$str2_i = stripos($haystack, $str2[$i]);
		if ($str1_i > $str2_i)
			return (1);
		if ($str1_i < $str2_i)
			return (-1);	
		$i++;
	}
}

if ($argc > 1)
{
	$array = array();
	foreach ($argv as $elem)
	{
		$temp = preg_split("/[\s]+/", trim($elem));
		if ($temp[0] != "")
			$array = array_merge($array, $temp);
	}
	$remove = array_shift($array);
	usort($array, "sorter");
	foreach ($array as $elem)
		echo($elem . "\n");
}
?>