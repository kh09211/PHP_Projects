<?php
/**
 * index.php
 * main index page for sqlite test and custom autoloader test
 */
require 'includes/autoload.inc.php';
require 'includes/header.inc.php';

//use App\SQLiteConnection; namespace removed from project

(new Test())->printTest();

$pdo = new SQLiteConnection;
$pdo->connect();
if ($pdo != null)
    echo ' Connected to the SQLite database successfully!';
else
    echo ' Whoops, could not connect to the SQLite database!';

?>