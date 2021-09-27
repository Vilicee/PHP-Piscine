<?PHP
	function ft_is_sort($tab)
	{
		if (!$tab)
			return (NULL);
		$orig = $tab;
		sort($tab);
		$i = 0;
		while ($orig[$i] != NULL)
		{
			if (strcmp($orig[$i], $tab[$i]) != 0)
				return (FALSE);
			$i++;
		}
		return (TRUE);
	}
?>