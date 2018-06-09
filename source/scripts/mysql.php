<?php
	$db = new mysqli('db', 'anagram', 'anagram', 'anagram');
	if ($db->connect_error) {
		die ("Could not connect to db " . $db->connect_error);
	}
?>