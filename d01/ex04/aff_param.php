#!/usr/bin/php
<?PHP
	$i = 1;

	if ($argc < 2)
		return (0);
	while ($argv[$i] != NULL)
	{
		echo($argv[$i++]);
		echo("\n");
	}
?>