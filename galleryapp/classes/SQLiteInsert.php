<?php
// Class to insert photo filename and data into the sqlite table
namespace NewNamespace;

Class SQLiteInsert {
	
	//Pdo property
	private $PDO;

	// Initialize the object with a specified PDO object
	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	//Insert photo filename and description into the photos table
	Public function insertPhoto($filename, $desc) {
		$sql = 'INSERT INTO photos (filename, description) VALUES( :file_name, :desc)';
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':file_name', $filename);
		$stmt->bindValue(':desc', $desc);
		$stmt->execute();

		return $this->pdo->lastInsertId();
	}

	Public function deletePhoto($photo_id) {
		$sql = 'DELETE FROM photos WHERE photo_id = :id';
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $photo_id);
		$stmt->execute();
	}

}