#!/usr/bin/php
<?PHP
if($argc == 2 && file_exists($argv[1]))
{
	$str = file_get_contents($argv[1]);
	function ft_toupper($matches)
	{
		return(str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
	}
	$str = preg_replace_callback('/<a.*?title="(.*?)">/s', "ft_toupper", $str);
	$str = preg_replace_callback('/<a.*?>(.*?)</s', "ft_toupper", $str);
	$str = preg_replace_callback('/<span.*?>(.*?)</s', "ft_toupper", $str);
	$str = preg_replace_callback('/<span.*?title="(.*?)">/s', "ft_toupper", $str);
	$str = preg_replace_callback('/<div.*?>(.*?)</s', "ft_toupper", $str);
	echo($str);
}
?>