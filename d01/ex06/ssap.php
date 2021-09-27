#!/usr/bin/php
<?PHP
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
		sort($array);
		$i = 0;
		while ($array[$i] != NULL)
		{
			echo($array[$i++] . "\n");
		}
	}
?>