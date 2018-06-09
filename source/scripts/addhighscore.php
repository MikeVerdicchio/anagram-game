<?php
    require 'mysql.php';

	$name = $_POST['name'];
	$score = $_POST['score'];

	$query = "INSERT INTO HighScore (Name, Score) VALUES ('$name', '$score')";
    $result = $db->query($query);
    $db->close();
?>