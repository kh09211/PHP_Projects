<?php
namespace NewNamespace;
// Creates the table needed if it does not exist

class SQLiteCreateTable {
	// declare pdo property
	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}
	
	// Create Tables
	public function createTables() {
		$commands = 'CREATE TABLE IF NOT EXISTS photos (
			photo_id INTEGER PRIMARY KEY,
			filename TEXT NOT NULL,
			description VARCHAR(255))';

	//Ececute sql commands to create table
	$this->pdo->exec($commands);
	}

	public function getTableList() {
		$stmt = $this->pdo->query("SELECT name
								FROM sqlite_master
								WHERE type = 'table'
								ORDER BY name");
		$tables = [];
		while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
			$tables[] = $row['name'];
		}

		return $tables;
	}
}
