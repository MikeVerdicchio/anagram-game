<?php
    require 'mysql.php';

	$query = "SELECT word FROM Words ORDER BY RAND() LIMIT 1";
	$result = $db->query($query);
	$rows = $result->num_rows;

	if ($rows >= 1) {
		echo "<Word>";
		$row = $result->fetch_array();
		$ans = $row["word"];
		echo "<value>$ans</value>";
		echo "</Word>";
	} else {
		die ("There was an error. Please try again.");
    }
    
    $db->close();
?>