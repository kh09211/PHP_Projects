<?php

/** 
 * Gallery App
 * This file deletes a photo from the gallery using the photo_id index / query parameter
 */
namespace NewNamespace;
require 'vendor/autoload.php';

$photo_id = $_GET['id'];
include 'includes/header.inc.php';

$hash = '$1$5S74e2I6$ak0TPqFNXYBN/8SaOWmst1'; // password changed
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submited']))) {
		$pass = $_POST['pass'];
	if (! password_verify($_POST['pass'], $hash)) {
		echo 'Incorrect password! Photo not deleted.';
	} else {
		$pdo = (new SQLiteConnection())->connect();
		$sqlite = new SQLiteInsert($pdo);
		$sqlite->deletePhoto($photo_id);
		// Redirect back to gallery
		header('Location: index.php');
	}
}
?>

<div class="container text-center">
  	   <h3 class="mt-3 mb-3">To delete a photo you must enter a password</h3>
        <form action="delete.php?id=<?php echo $photo_id; ?>" method="POST">
            <label>Enter Password:<input type="password" placeholder="password" name="pass" autofocus /></label><br>
            <input type="submit" name="submited" value="Submit"/>
        </form>
    </div>
