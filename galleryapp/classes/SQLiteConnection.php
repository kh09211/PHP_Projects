<?php
namespace NewNamespace;

// SQLite connection_aborted
Class SQLiteConnection {

  //PDO instance var type
  private $pdo;

  //return a PDO object instance that connects to the sqlite SQLiteDatabase
  public function connect() {
    if ($this->pdo == null) {
      $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
    }
  return $this->pdo;
  }
}
