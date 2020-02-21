<?php
/** 
 * Gallery App
 * This file uploaded photos submitted from the index page into 
 * the uploads folder and data to the SQLite database
 * NOTE: does not sanitize filenames, verify photos, or handle exeptions such
 *   as duplicate filenames. Further code needed for production use
 */ 
namespace NewNamespace;
require 'vendor/autoload.php';


$hash = '$2y$10$nqJZcc82rKSEsxJtQWouyu7cPLVrgJranLagBA1u4j3jZYozEGhDe';
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submited']))) {
		$description = $_POST['description'];
		$filename = basename($_FILES['file_to_upload']["name"]);
	if (! password_verify($_POST['pass'], $hash)) {
		echo 'Incorrect password or submit not clicked. Not posted';
	} else {
		if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], 'uploaded/' . basename($_FILES['file_to_upload']["name"]))) {
			echo 'photo upload successfully' . "\n";
		} else {
			echo 'ERROR! there was a problem uploading the file';
		}
		// Query the database and insert the data
		// var_dump($filename, $description); die;
		$pdo = (new SQLiteConnection())->connect();
		$sqlite = new SQLiteInsert($pdo);
		$sqlite->insertPhoto($filename, $description);
		// Redirect back to gallery
		header('Location: index.php');
	}
}