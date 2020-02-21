<?php
namespace NewNamespace;
// This class will query the data from the database

class SQLiteSelect {
	public $pdo;

	public function getPhotos($pdo) {
		$result = $pdo->query('SELECT * FROM photos');
		$this->rows = $result->fetchAll();

		return array_reverse($this->rows);
	}
}