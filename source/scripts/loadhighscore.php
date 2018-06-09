<?php
	require 'mysql.php';
	
	$query = "SELECT Name, Score FROM HighScore ORDER BY Score DESC";
	if($result = $db->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$name = $row['Name'];
			$score = $row['Score'];
			echo "<tr><td>" . $name . "</td><td>" . $score . "</td><tr>";
		}
	}

    $db->close();
?>