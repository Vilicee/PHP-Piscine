#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	date_default_timezone_set('GMT');
	$argv[1] = str_replace(":", " ", $argv[1]);
	$array = preg_split("/ +/", trim($argv[1]));
	$count = count($array);
	if ($count != 7)
	{
		echo("Wrong Format\n");
		return (0);
	}
	if ($array[0] == "Lundi" || $array[0] == "lundi")
		$array[0] = 1;
	if ($array[0] == "Mardi" || $array[0] == "mardi")
		$array[0] = 2;
	if ($array[0] == "Mercredi" || $array[0] == "mercredi")
		$array[0] = 3;
	if ($array[0] == "Jeudi" || $array[0] == "Jeudi")
		$array[0] = 4;
	if ($array[0] == "Vendredi" || $array[0] == "vendredi")
		$array[0] = 5;
	if ($array[0] == "Samedi" || $array[0] == "samedi")
		$array[0] = 6;
	if ($array[0] == "Dimanche" || $array[0] == "dimanche")
		$array[0] = 7;
	if ($array[2] == "Janvier" || $array[2] == "janvier")
		$array[2] = 1;
	if ($array[2] == "Février" || $array[2] == "février")
		$array[2] = 2;
	if ($array[2] == "Mars" || $array[2] == "mars")
		$array[2] = 3;
	if ($array[2] == "Avril" || $array[2] == "Avril")
		$array[2] = 4;
	if ($array[2] == "Mai" || $array[2] == "mai")
		$array[2] = 5;
	if ($array[2] == "Juin" || $array[2] == "juin")
		$array[2] = 6;
	if ($array[2] == "Juillet" || $array[2] == "juillet")
		$array[2] = 7;
	if ($array[2] == "Aout" || $array[2] == "aout")
		$array[2] = 8;
	if ($array[2] == "Septembre" || $array[2] == "septembre")
		$array[2] = 9;
	if ($array[2] == "Octobre" || $array[2] == "octobre")
		$array[2] = 10;
	if ($array[2] == "Novembre" || $array[2] == "novembre")
		$array[2] = 11;
	if ($array[2] == "Décembre" || $array[2] == "décembre")
		$array[2] = 12;
	foreach ($array as $elem)
	{
		if(!is_numeric($elem))
		{
			echo("Wrong Format\n");
			return (0);
		}
	}
	$time = mktime($array[4], $array[5], $array[6], $array[2], $array[1], $array[3]);
	$time2 = mktime(12, 02, 21, 11, 12, 2013);
	echo($time . "\n");
}
?>