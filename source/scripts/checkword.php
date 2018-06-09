<?php
    require 'mysql.php';

	$word = $_POST['word'];

	$query = "SELECT word FROM Words WHERE word='$word'";
	$result = $db->query($query);
	$rows = $result->num_rows;
	echo "<Return>";
	if ($rows >= 1) {
		echo "<Result>True</Result>";
	} else {
		echo "<Result>False</Result>";
	}
    echo "</Return>";
    
    $db->close();
?>