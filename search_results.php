<!DOCTYPE html>
<html>
<body>

<?php
	$movies = array(
					"comedy" => array("The Hangover","Knocked Up","Due Date"),
					"drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),
					"horror" => array("Halloween","The Conjuring","The Shining")
					);
$categories = array("comedy", "drama", "horror");
$selected_key = $_POST["category"];
$selected_val = $categories[$_POST["category"]];

echo "Search Result";
?>
<br>
<?php
	echo $_POST["search_string"]
?>
<br>
<?php
	echo $selected_key
?>
<br>
<?php
	echo $selected_val
?>
<br>
<input type="text" name="result" value=<?php $selected_key ?>>
</body>
</html>
