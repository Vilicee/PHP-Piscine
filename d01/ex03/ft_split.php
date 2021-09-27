<?PHP
	function ft_split($str)
	{
		$array = preg_split("/[\s]+/", trim($str));
		sort($array);
		if (!count($array) || !$array[0])
			return(NULL);
		return ($array);
	}
?>