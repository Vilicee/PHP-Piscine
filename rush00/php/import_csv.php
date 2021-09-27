<?php
function import_csv($conn, $target_file, $tab)
{
	if (file_exists($target_file))
	{
		// Reading file
		$file = fopen($target_file,"r");
		$i = 0;
		$importData_arr = array();

		while (($data = fgetcsv($file, 1000, ",")) !== FALSE)
		{
			$num = count($data);

			for ($c = 0; $c < $num; $c++)
			{
				$importData_arr[$i][] = $data[$c];
			}
			$i++;
		}
		fclose($file);

		// insert import data
		$skip = 0;
		foreach($importData_arr as $row)
		{
			if ($skip == 0)
			{
				$th_row = implode(",", $row);
			}
			if($skip != 0)
			{
				// Insert record
				$td_row = implode(",", $row);
				$insert_query = "INSERT INTO `$tab` ($th_row) VALUES ($td_row)";
				if (!mysqli_query($conn, $insert_query))
					die("FUBAR\n");
			}
			$skip++;
		}
	}
}
?>
