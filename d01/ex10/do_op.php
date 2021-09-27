#!/usr/bin/php
<?PHP
if ($argc != 4)
{
	echo("Incorrect Parameters\n");
	return (0);
}
if (trim($argv[2]) == '+')
{
	$result = trim($argv[1]) + trim($argv[3]);
	echo($result . "\n");
}
if (trim($argv[2]) == '-')
{
	$result = trim($argv[1]) - trim($argv[3]);
	echo($result . "\n");
}
if (trim($argv[2]) == '*')
{
	$result = trim($argv[1]) * trim($argv[3]);
	echo($result . "\n");
}
if (trim($argv[2]) == '/')
{
	$result = trim($argv[1]) / trim($argv[3]);
	echo($result . "\n");
}
if (trim($argv[2]) == '%')
{
	$result = trim($argv[1]) % trim($argv[3]);
	echo($result . "\n");
}
?>