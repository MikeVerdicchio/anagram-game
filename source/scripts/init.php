<?php
    require 'mysql.php';

	// Drop tables to start fresh
	$result = $db->query("DROP TABLE Words");

	// Recreate tables
	$result = $db->query("CREATE TABLE Words (word text)");
	$result = $db->query("CREATE TABLE HighScore (name text, score int)");

	// Insert values into tables
	ini_set("max_execution_time", 0);
	$fp = fopen("../resources/dictionary.txt", "r");
	$query = "INSERT INTO Words VALUES ";
	while ($currword = fgets($fp, 80)):
		$currword = rtrim($currword);
		$query .= "('$currword'), ";
	endwhile;
	$length = strlen($query);
	$query = substr($query, 0, $length - 2);
    $result = $db->query($query);
    
    $db->close();
	
	// Forward on the quiz page
	header('Location: ../AnagramFinder.html');
?>