<!DOCTYPE html>
<html>
<body>

<?php
	$movies = array("comedy" => array("The Hangover","Knocked Up","Due Date"),
					"drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),
					"horror" => array("Halloween","The Conjuring","The Shining")
				   );

	$selected_key = $_POST["category"];
	$string_to_find = $_POST["search_string"];
	$search_result = "";
	
	echo "Search Result for: <b>", $string_to_find, "</b>  in  <b>", $selected_key, "</b>  category";
	
	if (array_key_exists($selected_key, $movies)) 
	{
		foreach($movies[$selected_key] as $movie)
		{
			$pos = strpos($movie, $string_to_find);	
			if (!($pos === false))
			{
				$search_result = "<b>".$movie."</b>";
				echo "<br>", $search_result;
			}
		}	
	}
	else
	{
		foreach($movies as $key => $val)
		{
			foreach($val as $movie)
			{
				$pos = strpos($movie, $string_to_find);	
				if (!($pos === false))
				{
					$search_result = "<b>".$movie."</b> (".$key.")";
					echo "<br>", $search_result;
				}
			}	
		}
	}
	
	if ($search_result == "")
	{
		echo "<br> not found!";
	}
		
		
	
?>

</body>
</html>
