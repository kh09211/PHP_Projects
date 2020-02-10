<?php
/**
 * lib/functions.php
 * functions file for chatapp 1.0 project
 */


// Function to cut name/comment string to a certain length
function cut_string($string, $length) {
	if (strlen($string) > $length) {
		$newstring = mb_strimwidth($string, 0, $length);

		return $newstring;
	}
	else; return $string;
}

// This function connects to the database with the config file vars, then prepares a sql PDO statement
// with placeholders so that the page cant be compromised by sql injection
function put_comment($submited_data) {
		include 'lib/config.php';
		// $submited_data['version'] = $config['version']; FIX THIS
		// var_dump($submited_data); die;
		$pdo = new PDO($config['database_dsn'], $config['database_user'], $config['database_pass']);
		// $sql = "INSERT INTO :version (`name`, `comment`) VALUES (:name,:comment)";
		$sql = "INSERT INTO " . $config['version'] . " (`name`, `comment`) VALUES (:name,:comment)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute($submited_data);
}

// This function connects to the database with the config file and pulls the comments from the database
// but only the last ones by quereing in descending order. Then reverses results back to correct format
function get_comment() {
	include 'lib/config.php';
		$pdo = new PDO($config['database_dsn'], $config['database_user'], $config['database_pass']);
		$result = $pdo->query('SELECT * FROM ' . $config['version'] . ' ORDER BY id DESC LIMIT 13');
		$rows = $result->fetchALL();
		$rows = array_reverse($rows);
		
	 return $rows;
}
